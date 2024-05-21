@extends('layouts.admin')
@section('title')
    <title>Danh sách đơn hàng đã đặt </title>
@endsection

@section('content')
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>TT</th>
                    <th>Họ và Tên </th>
                    <th> Tỉnh</th>
                    <th>Địa Chỉ</th>
                    <th>Điện Thoại</th>
                    <th>Email</th>
                    <th>Thông Tin</th>
                </tr>
            </thead>
            <tbody>
                @php $i = 1; @endphp
                @foreach($orders as $sp)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $sp->ho_ten }}</td>
                    <td>{{$sp->tinh}}</td>
                    <td>{{$sp->dia_chi}}</td>
                    <td>{{$sp->dienthoai}}</td>
                    <td>{{$sp->email}}</td>
                    <td>{{$sp->thongtin}}</td>
                    <td><a href="{{ route('Cus.order',$sp->idoders) }}" class="btn btn-danger" onclick="return confirm('Xác nhận đơn hàng')">Xác Nhận</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection