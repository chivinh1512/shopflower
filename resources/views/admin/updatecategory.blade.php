@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <form action="" method="post">
                @csrf
                Tên loại: <input type="text" class="form-control" name="name" value="{{$cate->name}}">
                <input type="hidden" name="id" value="{{$cate->id}}"><br>
                Hình:
                <img src="source/img/categories/{{$cate->img}}" width="100px" height="100px">
                <input type="file" name="img"><br><br>
                <input type="submit" name="update" class="btn btn-dark col-md-1 ml-3" value="update">
            </form>
        </div>
        <div class="col"></div>
    </div>
@endsection