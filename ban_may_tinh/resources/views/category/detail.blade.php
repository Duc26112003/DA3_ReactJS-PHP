
@extends('layouts.admin')
@section('title')
<title>Danh sách danh mục</title>
@endsection

@section('content')
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i>
            <span class="break">Chi tiết sản phẩm:{{$id_sanpham}}
            </span>
        </h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <!-- <table class="table table-striped table-bordered bootstrap-datatable datatable"> -->
        <table>
            <thead>
                <tr>
                    <td>ID Sản Phẩm:</td>      
                    <td>{{$id_sanpham}}</td>            
                </tr>
                <tr>
                    <td>Tên Sản Phẩm:</td>      
                    <td>{{$tensanpham}}</td>            
                </tr>
                <tr>
                    <td>Mã Sản Phẩm:</td>      
                    <td>{{$masanpham}}</td>            
                </tr>
                <tr>
                    <td>Giá Sản Phẩm:</td>      
                    <td>{{$giasanpham}}</td>            
                </tr>
                <tr>
                    <td>Số Lượng Sản Phẩm:</td>      
                    <td>{{$soluong}}</td>            
                </tr>
                <tr>
                    <td>Hình Ảnh Sản Phẩm:</td>      
                    <td><img src="/image/{{ $hinhanh}}" alt="" style="width: 80px"></td>            
                </tr>
                <tr>
                    <td>Tóm Tắt:</td>      
                    <td>{{$tomtat}}</td>            
                </tr>
                <tr>
                    <td>Thông Số Máy </td>      
                    <td>{{$thongsomay}}</td>            
                </tr>
                <tr>
                    <td>ID_Danh Mục:</td>      
                    <td>{{$id_danhmuc}}</td>            
                </tr>
                <tr>
                    <td>Trạng Thái:</td>      
                    <td>{{$trangthai}}</td>            
                </tr>       
            </thead> 
        </table>            
    </div>
</div>
@endsection