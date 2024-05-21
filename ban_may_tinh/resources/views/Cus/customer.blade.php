@extends('layouts.admin')
@section('title')
    <title>Danh sách khách hàng</title>
@endsection

@section('content')
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>TT</th>
                    <th>Họ và Tên </th>
                    <th>Email </th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                @php $i = 1; @endphp
                @foreach($customer as $sp)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $sp->name }}</td>
                    <td>{{$sp->email}}</td>
                    <td><a href="{{ route('Cus.delete',$sp->id_users) }}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')">Xoá</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection