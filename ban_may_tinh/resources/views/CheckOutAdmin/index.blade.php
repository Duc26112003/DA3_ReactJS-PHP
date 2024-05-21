
@extends('layouts.admin')
@section('title')
    <title>Danh sách đơn hàng</title>
@endsection

@section('content')
<div class="card-body">
    <div class="table-reodonsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellodacing="0">
            <thead>
                <tr>
                    <th>TT</th>
                    <th>Họ Tên Khách Hàng</th>
                    <th>Tỉnh</th>
                    <th>Địa Chỉ</th>
                    <th>Điện Thoại</th>
                    <th>Email</th>
                    <th>Thông Tin</th>
                    <th>Xác Nhận </th>
                    
                </tr>
            </thead>
            <tbody>
                @php $i = 1; @endphp    
                @foreach($order as $od)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $od->ho_ten }}</td>
                    <td>{{ $od->tinh }}</td>
                    <td>{{ $od->dia_chi }}</td>
                    <td>{{ $od->dienthoai }}</td>
                    <td>{{ $od->email }}</td>
                    <td>{{ $od->thongtin }}</td>
                    <td><a href="{{ route('detail_checkout',$od->idoders) }}" class="btn btn-primary " >Chi Tiết </a></td>
                    <td>
                        <a href="#" id="xac-nhan-btn" class="btn btn-warning">Xác Nhận</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div id="confirmation-message" style="display: none;">
            <p>Đơn hàng của bạn đã được xác nhận!</p>
        </div>
        <script>
            const xacNhanBtn = document.getElementById('xac-nhan-btn');
            const confirmationMessage = document.getElementById('confirmation-message');
    
            xacNhanBtn.addEventListener('click', () => {
                confirmationMessage.style.display = 'block'; // Hiển thị thông báo
            });
        </script>
    </div>
</div>

@endsection
