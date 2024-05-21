@extends('layouts.admin')
@section('title')
    <title>Bài Viết</title>
@endsection

@section('content')
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>TT</th>
                        <th>Tiều Đề</th>
                        <th>Nội Dung</th>
                        <th>Hình ảnh</th>
                        <th>Thêm </th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach ($blog as $sp)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $sp->title }}</td>
                            <td>{{ $sp->content }}</td>
                            <td> <img src="image/{{ $sp->img }}" style="width: 80px" alt=""></td>
                            <td><a href="{{route('show-blog', $sp->id)}}" class="btn btn-primary">Chi tiết</a></td>
                            <td><a href="{{route('Blog.editblog', $sp->id)}}" class="btn btn-warning">Edit</a>
                            </td>
                            <td><a href="{{route('deleteblog', $sp->id)}}" class="btn btn-danger"
                                    onclick="return confirm('Bạn có muốn xóa không?')">Xoá</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
