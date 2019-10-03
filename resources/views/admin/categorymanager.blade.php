@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <form action="" method="post">
                @csrf
                Tên Loại: <input type="text" class="form-control " name="name">
                Hình : <input type="file" name="img"><br><br>
                <input type="submit" name="them" class="btn btn-dark col-md-1 ml-3" value="thêm"><br>
            </form>
            <table class="table table-bordered">
                <tr>
                    <td>Mã loại</td>
                    <td>Tên loại</td>
                    <td>Ảnh loại</td>
                    <td>Thao tác</td>
                </tr>
                @forelse($data as $da)
                    <tr>
                        <td>{{$da->id}}</td>
                        <td>{{$da->name}}</td>
                        <td><img src="source/img/categories/{{$da->img}}" style="width: 70px"/></td>
                        <td>
                            <a href="admin/categorymanager/delete/{{$da->id}}">Xóa</a>
                            <a href="admin/categorymanager/edit/{{$da->id}}">Sửa</a>
                        </td>
                    </tr>
                @empty
                    <div style="padding-left: 30px">Không có kết quả</div>
                @endforelse
            </table>
        </div>
        <div class="col"></div>
    </div>
@endsection