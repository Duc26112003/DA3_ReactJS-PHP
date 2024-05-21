<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Users;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function DS_admin()
    {
        // $category = Category::all();
        // return view('category.index_admin',compact('category'))->with('i',(request()->input('page',1)-1)*5);

        $category = Category::paginate(10); // Lấy 10 sản phẩm trên mỗi trang
        return view('category.index_admin', ['category' => $category]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { {
            $data = [
                // 'id_sanpham',
                'tensanpham' => $request->input('tensanpham'),
                'masanpham ' => $request->input('masanpham'),
                'giasanpham' => (int)$request->input('giasanpham'),
                'soluong' => (int)$request->input('soluong'),
                'hinhanh' => $request->input('hinhanh'),
                'tomtat' => $request->input('tomtat'),
                'thongsomay' => $request->input('thongsomay'),
                'id_danhmuc' => $request->input('id_danhmuc'),
                'trangthai' => $request->input('trangthai'),
            ];
            Category::create($data);
            //sau khi thêm xong hiển thị sang trang index thông báo thêm thành công
            return redirect()->route('category.index_admin')->with('success', 'Thêm thành công danh mục!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function detail(string $id_sanpham)
    {
        $sp = Category::where('id_sanpham', $id_sanpham)->first();
        if (!$sp) {
            // Xử lý khi không tìm thấy category với CatID tương ứng
            return abort(404); // Trả về trang lỗi 404
        }
        // Gán các thuộc tính sản phẩm cho các biến để truyền vào view
        $id_sanpham  = $sp->id_sanpham;
        $tensanpham = $sp->tensanpham;
        $masanpham = $sp->masanpham;
        $soluong = $sp->soluong;
        $giasanpham = $sp->giasanpham;
        $hinhanh = $sp->hinhanh;
        $tomtat = $sp->tomtat;
        $thongsomay = $sp->thongsomay;
        $id_danhmuc = $sp->id_danhmuc;
        $trangthai = $sp->trangthai;
        return view('category.detail', compact('id_sanpham', 'tensanpham', 'masanpham', 'soluong', 'giasanpham', 'hinhanh', 'tomtat', 'thongsomay', 'id_danhmuc', 'trangthai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id_sanpham)
    {
        $category = Category::where('id_sanpham', $id_sanpham)->first();
        if (!$category) {
            // Xử lý khi không tìm thấy category với CatID tương ứng
            return abort(404); // Trả về trang lỗi 404
        }
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_sanpham)
    {
        $category = Category::find($id_sanpham);
        if (!$category) {
            // Xử lý khi không tìm thấy category với id tương ứng
            return abort(404); // Trả về trang lỗi 404
        }
        $request->validate([
            // Định nghĩa các quy tắc kiểm tra dữ liệu
        ]);
        // Cập nhật các thuộc tính của category từ dữ liệu được gửi từ form
        $category->tensanpham = $request->tensanpham;
        $category->masanpham = $request->masanpham;
        $category->giasanpham = $request->giasanpham;
        $category->soluong = $request->soluong;
        $category->hinhanh = $request->hinhanh;
        $category->tomtat = $request->tomtat;
        $category->thongsomay = $request->thongsomay;
        $category->id_danhmuc = $request->id_danhmuc;
        $category->trangthai = $request->trangthai;
        // Cập nhật các thuộc tính khác tương tự
        $category->save();
        return redirect()->route('category.index_admin', ['id_sanpham' => $id_sanpham])->with('success', 'Danh mục đã được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_sanpham)
    {
        $category = Category::find($id_sanpham); // Replace 'id' with the actual primary key column name

        if ($category) {
            $category->delete();
            return redirect()->route('category.index_admin')->with('success', 'Xóa thành công');
        } else {
            // Handle case where customer is not found (optional)
            return redirect()->route('category.index_admin')->with('error', 'Không tìm thấy khách hàng!');
        }
    }
}
