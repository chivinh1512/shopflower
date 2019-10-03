@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <form action="" method="post">
                @csrf()
                Tên sản phẩm:
                <input type="text" class="form-control" name="name" value="{{$product->name}}"><br>
                <input type="hidden" name="id" value="{{$product->id}}">
                Giá:
                <input type="text" name="price" value="{{$product->price}}"><br>

                Chi tiết sản phẩm:
                <input type="text" class="form-control" name="detail" value="{{$product->detail}}"><br>
                Hình sản phẩm:
                <img src="source/img/products/{{$product->img}}" width="100px" height="100px"><br>
                <input type="file" name="img"><br><br>
                <input type="submit" name="update" class="btn btn-dark col-md-1 ml-3" value="update">
            </form>
        </div>
        <div class="col"></div>
    </div>
@endsection