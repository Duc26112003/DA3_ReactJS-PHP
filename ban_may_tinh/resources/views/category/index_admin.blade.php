@extends('layouts.admin')
@section('title')
    <title>Danh sách danh mục</title>
@endsection

@section('content')
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>TT</th>
                    <th>Tên</th>
                    <th>Giá sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Thêm </th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                @php $i = 1; @endphp
                @foreach($category as $sp)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $sp->tensanpham }}</td>
                    <td>{{ number_format($sp->giasanpham) }}</td>
                    <td> <img src="image/{{ $sp->hinhanh}}" style="width: 80px" alt=""></td>
                    <td><a href="{{ route('show',$sp->id_sanpham) }}" class="btn btn-primary" >Chi tiết</a></td>
                    <td><a href="{{ route('category.edit',$sp->id_sanpham) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('category.delete',$sp->id_sanpham) }}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')">Xoá</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $category->links('pagination::bootstrap-4') }}
    </div>
</div>

@endsection
