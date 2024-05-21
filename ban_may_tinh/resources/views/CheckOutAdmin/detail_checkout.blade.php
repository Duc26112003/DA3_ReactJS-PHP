
@extends('layouts.admin')
@section('title')
<title>Danh sách đơn hàng</title>
@endsection

@section('content')
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i>
            <span class="break">Chi tiết đơn hàng:{{$id_order}}
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
                    <td>Tên Sản Phẩm:</td>      
                    <td>{{$product_name }}</td>            
                </tr>
                <tr>
                    <td>Giá Sản Phẩm:</td>      
                    <td>{{$product_price }}</td>            
                </tr>
                <tr>
                    <td>Số Lượng:</td>      
                    <td>{{$product_quantity }}</td>            
                </tr>
                      
            </thead> 
        </table>            
    </div>
</div>
@endsection