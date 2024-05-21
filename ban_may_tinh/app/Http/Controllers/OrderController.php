<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Detail_Cart;
use App\Models\Detail_Order;
use App\Http\Controllers\Exception;


use function Laravel\Prompts\alert;

class OrderController extends Controller
{

    public function checkout(Request $request)
    {
        // Xác thực dữ liệu
        $validatedData = $request->validate([
            'ho_ten' => 'required|string',
            'tinh' => 'required|string',
            'dia_chi' => 'required|string',
            'dienthoai' => 'required|string',
            'email' => 'required|string|email',
            'thongtin' => 'required|string',
        ]);

        try {
            // Thêm đơn hàng vào bảng orders và lấy ID mới thêm
            $orderId = DB::table('oders')->insertGetId($validatedData);

            if ($orderId) {
                // Thêm chi tiết đơn hàng vào bảng detail_order
                $detailOrder = Detail_Order::create([
                    'id_order' => $orderId,
                    'product_name' => $request->input('product_name'),
                    'product_price' => $request->input('product_price'),
                    'product_quantity' => $request->input('product_quantity'),
                ]);
            }

            // Xóa sản phẩm khỏi giỏ hàng
            Detail_Cart::truncate();

            // Truyền dữ liệu sang view
            return redirect('/index')->with(compact('orderId'))->with('success', 'Đơn hàng của bạn đã được gửi thành công!');
        } catch (\Exception $e) {
            // Xử lý ngoại lệ nếu có lỗi xảy ra
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi xử lý đơn hàng: ' . $e->getMessage());
        }
    }

    // public function detailcartProduct(Request $request)
    // {
    //     // Lấy product_id từ request hoặc từ bất kỳ nguồn nào khác
    //     $id = $request->input('id');

    //     // Tìm sản phẩm trong cơ sở dữ liệu
    //     $product = Product::find($id);

    //     // Kiểm tra xem sản phẩm có tồn tại không
    //     if ($product) {
    //         // Lấy các thông tin của sản phẩm
    //         $id = $product->id_sanpham;
    //         $product_name = $product->tensanpham;
    //         $product_image = $product->hinhanh;

    //         // Tiếp tục xử lý thêm sản phẩm vào giỏ hàng
    //         // ...

    //         // Ví dụ: trả về dữ liệu cho view
    //         return view('add_product', compact('id', 'product_name', 'product_image'));
    //     } else {
    //         // Xử lý trường hợp không tìm thấy sản phẩm
    //         return redirect()->back()->with('error', 'Không tìm thấy sản phẩm');
    //     }
    // }


    // admin

    public function detailcartProduct(Request $request)
    {
        // Truy vấn các mục trong giỏ hàng cùng với thông tin sản phẩm liên kết
        $detail_cart = Detail_Cart::with('product')->get();
        // Truyền dữ liệu sang view
        return view('check-out', compact('detail_cart'));
    }






    // admin
    public function index_checkout()
    {
        $order = Order::all(); // Hiển thị danh sách các người đặt hàng
        return view('CheckOutAdmin.index', ['order' => $order]);
    }

    public function detail_checkout(string $id_order)
    {

        $detail_order = Detail_Order::where('id_order', $id_order)->first();
        if (!$detail_order) {

            return abort(404); // Trả về trang lỗi 404
        }
        // Gán các thuộc tính sản phẩm cho các biến để truyền vào view
        $id_order  = $detail_order->id_order;
        $product_name = $detail_order->product_name;
        $product_price = $detail_order->product_price;
        $product_quantity = $detail_order->product_quantity;
        return view('CheckOutAdmin.detail_checkout', compact('id_order', 'product_name', 'product_price', 'product_quantity'));
    }
}
