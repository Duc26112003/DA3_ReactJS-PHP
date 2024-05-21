
@extends('layouts.admin')
@section('title')
<title>Sửa sản phẩm</title>
@endsection

@section('content')
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break">Sửa sản phẩm {{$category->id_sanpham}}</span></h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <!-- <table class="table table-striped table-bordered bootstrap-datatable datatable"> -->
            <form action="{{ route('category.update',['id_sanpham' => $category->id_sanpham]) }}" method="post">
                @csrf
                @method( 'put' )
                <input type="hidden" name="editvalue">
                <input type="hidden" name="id_sanpham">
                <table>
                <thead>
                    
                    <tr>
                        <td>Tên Sản Phẩm</td>
                        <td><input type="text" name="tensanpham" id="tensanpham" value="{{$category->tensanpham}}"></td>                  
                    </tr>
                    <tr>
                        <td>Mã Sản Phẩm</td>
                        <td><input type="text" name="masanpham" id="masanpham" value="{{$category->masanpham}}"></td>                  
                    </tr>
                    <tr>
                        <td>Giá Sản Phẩm</td>
                        <td><input type="number" name="giasanpham" id="giasanpham"  value="{{$category->giasanpham}}"></td>                  
                    </tr>
                    <tr>
                        <td>Số Lượng</td>
                        <td><input type="number" name="soluong" id="soluong"  value="{{$category->soluong}}"></td>                  
                    </tr>
                    <tr>
                        <td>Hình Ảnh</td>
                        <td><input type="file" name="hinhanh" id="hinhanh" value="{{$category->hinhanh}}"></td>                  
                    </tr>
                    <tr>
                        <td>Tóm Tắt</td>
                        <td><input type="text" name="tomtat" id="tomtat" value="{{$category->tomtat}}"></td>                  
                    </tr>
                    <tr>
                        <td>Nội Dung</td>
                        <td><input type="text" name="thongsomay" id="thongsomay"  value="{{$category->thongsomay}}"></td>                  
                    </tr>
                    <tr>
                        <td>ID_Danh Mục</td>
                        <td><input type="number" name="id_danhmuc" id="id_danhmuc"  value="{{$category->id_danhmuc}}"></td>                  
                    </tr>
                    <tr>
                        <td>Trạng Thái</td>
                        <td><input type="number" name="trangthai" id="trangthai"  value="{{$category->trangthai}}"></td>                  
                    </tr>  
                          
                </thead> 
            </table> 
            <div class="form-actions">
                <button type="submit" class="btn btn-primary" name="cmd">Save</button>                          
                <button type="reset" class="btn">Cancel</button>
            </div>
            </form>        
    </div>
</div>
@endsection

