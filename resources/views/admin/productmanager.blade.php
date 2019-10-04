@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
                <form action="" method="post">
                    @csrf()
                    Tên sản phẩm: <input type="text" class="form-control" name="name"><br>
                    Hình: <input class="form-control" type="file" name="img"><br>
                    Chọn danh mục:
                    <select name="id_cate">
                        @forelse($datacategory as $d)
                            <option value="{{$d->id}}">{{$d->name}}</option>
                        @empty
                            Không có kết quả
                        @endforelse
                    </select><br><br>
                    Giá tiền: <input type="text" class="form-control" name="price"><br>
                    Chi tiết sản phẩm: <input type="text" class="form-control" name="detail"><br>
                    <input type="submit" name="add" class="btn btn-dark" value="thêm">
                </form><br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình</th>
                            <th>Giá tiền</th>
                            <th>Chi tiết sản phẩm</th>
                            <th>Thao tác</th>
                        </tr>
                        @forelse($dataproduct as $da)
                            <tr class="row-pd">
                                <td>{{$da->id}}</td>
                                <td>{{$da->name}}</td>
                                <td><img src="source/img/products/{{$da->img}}" style="width: 70px"/></td>
                                <td>{{$da->price}}</td>
                                <td>{{$da->detail}}</td>
                                <td>
                                    <a href="admin/productmanager/delete/{{$da->id}}">Xóa</a>
                                    <a href="admin/productmanager/edit/{{$da->id}}">Sửa</a></td>
                            </tr>
                        @empty
                            <div style="padding-left: 30px">Không có kết quả</div>
                        @endforelse
                    </table>
                    {{$dataproduct->links()}}

                <div class="col-sm-1"></div>
            </div>
@endsection