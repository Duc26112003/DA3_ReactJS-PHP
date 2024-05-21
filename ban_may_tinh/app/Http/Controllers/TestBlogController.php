<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class TestBlogController extends Controller
{
    public function index(){
        $blog = Blog::all();
        return view('Blog.blog_admin', ['blog' => $blog]);
    }
    public function storeBlog(Request $request)
    { {
            $data = [
                // 'id_sanpham',
                'title' => $request->input('title'),
                'content ' => $request->input('content'),
                'img' => $request->input('img'),
                
            ];
            Blog::create($data);
            //sau khi thêm xong hiển thị sang trang index thông báo thêm thành công
            return redirect()->route('addblog')->with('success', 'Thêm thành công danh mục!');
        }
    }
    public function create()
    {
        return view('Blog.addblog');
    }
    public function detailBlog($id)
    {
        $blog = Blog::where('id', $id)->first();
        if (!$blog) {
            
            return abort(404); // Trả về trang lỗi 404
        }
        // Gán các thuộc tính sản phẩm cho các biến để truyền vào view
        $id  = $blog->id;
        $title = $blog->title;
        $content = $blog->content;
        $img = $blog->img;
       
        return view('Blog.blogdetail', compact('id', 'title', 'content', 'img'));
    }

    public function editBlog($id)
    {
        $blog = Blog::where('id', $id)->first();
        if (!$blog) {
            // Xử lý khi không tìm thấy category với CatID tương ứng
            return abort(404); // Trả về trang lỗi 404
        }
        return view('Blog.editblog', compact('blog'));  
    }


    public function updateBlog(Request $request, string $id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            // Xử lý khi không tìm thấy category với id tương ứng
            return abort(404); // Trả về trang lỗi 404
        }
        $request->validate([
            // Định nghĩa các quy tắc kiểm tra dữ liệu
        ]);
        // Cập nhật các thuộc tính của category từ dữ liệu được gửi từ form
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->img = $request->img;
        
        // Cập nhật các thuộc tính khác tương tự
        $blog->save();
        return redirect()->route('blog_admin', ['id' => $id])->with('success', 'Danh mục đã được cập nhật thành công.');
    }   
    
    public function deleteBlog(string $id)
    {
        $blog = Blog::find($id); // Replace 'id' with the actual primary key column name

        if ($blog) {
            $blog->delete();
            return redirect()->route('blog_admin')->with('success', 'Xóa thành công');
        } else {
            // Handle case where customer is not found (optional)
            return redirect()->route('blog')->with('error', 'Không tìm thấy khách hàng!');
        }
    }
}
