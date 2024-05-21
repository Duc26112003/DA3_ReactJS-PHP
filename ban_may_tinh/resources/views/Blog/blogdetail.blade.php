
@extends('layouts.admin')
@section('title')
<title>Danh sách bài viết</title>
@endsection

@section('content')
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i>
            <span class="break">Chi tiết bài viết:{{$id}}
            </span>
        </h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <table>
            <thead>
                <tr>
                    <td>Tiêu Đề</td>      
                    <td>{{$title}}</td>            
                </tr>
                
                <tr>
                    <td>Nội Dung</td>      
                    <td>{{$content}}</td>            
                </tr>
                <tr>
                    <td>Hình Ảnh Sản Phẩm:</td>      
                    <td><img src="/image/{{ $img}}" alt="" style="width: 80px"></td>            
                </tr>
                     
            </thead> 
        </table>            
    </div>
</div>
@endsection