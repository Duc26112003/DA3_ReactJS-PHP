<?php

namespace App\Http\Controllers;

use App\Models\Cart_Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Detail_Cart; // Import Eloquent Model

class CartController extends Controller
{

    public function saveCart(Request $request)
    {
        $id_sanpham = $request->id_sanpham;
        $product_info = DB::table('products')->where('id_sanpham', $id_sanpham)->first();

        if (!$product_info) {
            return Redirect::back()->with('error', 'Sản phẩm không tồn tại.');
        }

        // Tìm hoặc tạo một bản ghi giỏ hàng cho khách hàng hiện tại
        $cart_product = Cart_Product::firstOrCreate(['customer_id' => auth()->id()]);

        // Thêm sản phẩm vào bảng detail_cart
        Detail_Cart::create([
            'id' => $product_info->id_sanpham,
            'cart_id' => $cart_product->id,
            'quantity' => $request->input('quantity', 1), // Lấy số lượng từ request, mặc định là 1
            'price_by_quantity' => $product_info->giasanpham,
        ]);

        // Chuyển hướng đến trang giỏ hàng sau khi thêm sản phẩm thành công
        return Redirect::to('/show_cart')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');
    }


    public function showCart()
    {
        // Lấy danh sách sản phẩm trong giỏ hàng từ bảng Detail_Cart
        $customerId = auth()->id(); // Giả sử bạn có thông tin khách hàng đang đăng nhập
        $cart = Cart_Product::where('customer_id', $customerId)->first();

        if ($cart) {
            $items = Detail_Cart::where('cart_id', $cart->id)
                ->join('products', 'detail_cart.id', '=', 'products.id_sanpham')
                ->select('detail_cart.*', 'products.tensanpham', 'products.hinhanh', 'products.giasanpham')
                ->get();
        } else {
            $items = collect(); // Trả về một tập hợp trống nếu không có giỏ hàng
        }

        // Tính toán tổng tiền và VAT
        $subtotal = $items->sum(function ($item) {
            return $item->price_by_quantity * $item->quantity;
        });
        $vat = $subtotal * 0.1;
        $total = $subtotal + $vat;

        // Lưu giá trị của thuế VAT và tổng tiền vào session để sử dụng sau này
        session()->put('vat', $vat);
        session()->put('total_price', $total);

        // Truyền dữ liệu sản phẩm và giá trị của thuế VAT đến view để hiển thị
        return view('FE.show_cart', compact('items', 'vat', 'total', 'subtotal'));
    }

    public function Checkout()
    {
        $provinces = [
            'An Giang', 'Bà Rịa - Vũng Tàu', 'Bạc Liêu', 'Bắc Giang', 'Bắc Kạn', 'Bạc Liêu', 'Bắc Ninh', 'Bến Tre', 'Bình Định', 'Bình Dương', 'Bình Phước', 'Bình Thuận', 'Cà Mau', 'Cao Bằng', 'Đắk Lắk', 'Đắk Nông', 'Điện Biên', 'Đồng Nai', 'Đồng Tháp', 'Gia Lai', 'Hà Giang', 'Hà Nam', 'Hà Tĩnh', 'Hải Dương', 'Hậu Giang', 'Hòa Bình', 'Hưng Yên', 'Khánh Hòa', 'Kiên Giang', 'Kon Tum', 'Lai Châu', 'Lâm Đồng', 'Lạng Sơn', 'Lào Cai', 'Long An', 'Nam Định', 'Nghệ An', 'Ninh Bình', 'Ninh Thuận', 'Phú Thọ', 'Quảng Bình', 'Quảng Nam', 'Quảng Ngãi', 'Quảng Ninh', 'Quảng Trị', 'Sóc Trăng', 'Sơn La', 'Tây Ninh', 'Thái Bình', 'Thái Nguyên', 'Thanh Hóa', 'Thừa Thiên Huế', 'Tiền Giang', 'Trà Vinh', 'Tuyên Quang', 'Vĩnh Long', 'Vĩnh Phúc', 'Yên Bái', 'Phú Yên', 'Cần Thơ', 'Đà Nẵng', 'Hải Phòng', 'Hà Nội', 'Hồ Chí Minh'
        ];
        $detail_cart = \App\Models\Detail_Cart::all();
        $totalPrice = $detail_cart->sum('price_by_quantity');
        return view('FE.checkout', compact('detail_cart', 'provinces', 'totalPrice'));
    }
    public function delete_to_cart(string $product_id)
    {
        // Lấy bản ghi chi tiết giỏ hàng
        $detailCart = Detail_Cart::find($product_id);

        // Xóa sản phẩm khỏi cơ sở dữ liệu
        if ($detailCart) {
            $detailCart->delete();
            return redirect()->route('FE.show_cart')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng');
        } else {
            return redirect()->route('FE.show_cart')->with('error', 'Không tìm thấy sản phẩm trong giỏ hàng');
        }
    }

    // public function update_cart(Request $request)
    // {
    //     // Lấy thông tin từ request
    //     $product_id = $request->input('product_id');
    //     // Tìm chi tiết giỏ hàng theo id
    //     $detailCart = Detail_Cart::find($product_id);

    //     // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
    //     if ($detailCart) {
    //         $detailCart->update([
    //             'quantity' => $request->quantity,
    //             'total' => $request->quantity * $detailCart->price

    //         ]);
    //         $response['total'] = number_format($detailCart->total);

    //         $cart = \App\Models\Order::where('userid', auth()->id())->first();
    //         $cartDetails = \App\Models\Detail_Cart::where('cart_id', $cart->id)->where('status', 1)->get();

    //         $response['totals'] = number_format($cartDetails->sum('total'));


    //         // Chuyển hướng người dùng đến trang giỏ hàng với thông báo thành công
    //         return redirect() - back()->with('success', 'Số lượng sản phẩm đã được cập nhật thành công');
    //     } else {
    //         // Xử lý trường hợp không tìm thấy sản phẩm trong giỏ hàng
    //         return redirect()->back()->with('error', 'Không tìm thấy sản phẩm trong giỏ hàng');
    //     }
    // }

    public function update_cart(Request $request)
    {
        // Lấy thông tin từ request
        $product_id = $request->input('product_id');
        $newQuantity = $request->input('quantity');

        // Tìm chi tiết giỏ hàng theo product_id
        $detailCart = Detail_Cart::find($product_id);

        // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
        if ($detailCart) {
            // Cập nhật số lượng và tính tổng giá mới
            $detailCart->update([
                'quantity' => $newQuantity,
                'total' => $newQuantity * $detailCart->price
            ]);

            // Tính tổng giá trị của giỏ hàng
            $response['totals'] = number_format($detailCart->sum('total'));

            // Chuyển hướng người dùng đến trang giỏ hàng với thông báo thành công
            return redirect()->back()->with('success', 'Số lượng sản phẩm đã được cập nhật thành công')->compact($response);
        }
    }


    // public function update_cart(Request $request)
    // {
    //     try {
    //         // Bắt đầu transaction
    //         DB::beginTransaction();

    //         // Lấy thông tin từ request
    //         $product_id = $request->input('product_id');
    //         $newQuantity = $request->input('cart_quantity');

    //         // Tìm chi tiết giỏ hàng theo product_id
    //         $detailCart = Detail_Cart::where('product_id', $product_id)->first();

    //         // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
    //         if ($detailCart) {
    //             // Cập nhật số lượng và tính tổng giá mới
    //             $detailCart->update([
    //                 'quantity' => $newQuantity,
    //                 'total' => $newQuantity * $detailCart->price
    //             ]);

    //             // Tính tổng giá trị của giỏ hàng
    //             $cart = $detailCart->cart;
    //             $this->updateCartTotal($cart);

    //             // Commit transaction
    //             DB::commit();

    //             // Trả về phản hồi thành công với tổng giá trị giỏ hàng
    //             return redirect()->back()->with('success', 'Số lượng sản phẩm đã được cập nhật thành công');
    //         } else {
    //             // Rollback transaction nếu không tìm thấy chi tiết giỏ hàng
    //             DB::rollback();
    //             // Trả về phản hồi lỗi
    //             return redirect()->back()->with('error', 'Không tìm thấy sản phẩm trong giỏ hàng');
    //         }
    //     } catch (\Exception $e) {
    //         // Rollback transaction nếu có lỗi xảy ra
    //         DB::rollback();
    //         // Trả về phản hồi lỗi
    //         return redirect()->back()->with('error', 'Đã xảy ra lỗi khi cập nhật giỏ hàng: ' . $e->getMessage());
    //     }
    // }



}
