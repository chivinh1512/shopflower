@extends('front_end.master')
@section('content')

    <main>
        <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

                <form action="" method="post">
                    @csrf()
                    <div class="row">
                        <div class="col-md-4" style="margin-left: 10%">
                        <img src="{{\Auth::user()->avatar}}" width="80%">

                        </div>
                        <div class="col-8">
                                Ngày tham gia : <br>
                                <input type="text" value="{{\Auth::user()->created_at}}" readonly>  <br>
                                Họ và tên: <input type="text" class="form-control" name="name" value="{{\Auth::user()->name}}" readonly>
                                Số điện thoại: <input type="text" class="form-control" name="phone" value="{{\Auth::user()->phone}}">
                                Email: <input type="text" class="form-control" name="email" value="{{\Auth::user()->email}}">
                                Địa chỉ: <input type="text" class="form-control" name="address" value="{{\Auth::user()->address}}"><br>
                                <input type="submit" name="edit" class="btn btn-dark" value="Update thông tin">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </main>

@endsection

