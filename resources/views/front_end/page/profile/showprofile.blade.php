@extends('front_end.master')
@section('content')
    <style>
        .ab{
            position: absolute;
            background: #ccc;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: 2px solid #fff;
            box-shadow: 0 0 3px 0 rgba(0,0,0,.2);
            bottom: 165px;
            left: 70px;
            z-index: 2;
            line-height: 52px;
            cursor: pointer;
            text-align: center;
        }
        .ac {
            background-image: url('source/img/avatar/cam.jpg');
            background-size: 25px 20px;
            width: 25px;
            height: 20px;
            display: inline-block;
        }
    </style>
    <main>
        <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

                <form action="" method="post">
                    @csrf()
                    <div class="row">
                        <div class="col-md-4">
                                @if(empty(\Auth::user()->avatar))
                                    <div style="margin-left: 30%; margin-top: 10%"; > <img style="border-radius: 50%;" class="pull-left" src="source/img/avatar/aq.png" width="230px" height="230px"> </div>
                                    <div class="ab" style="margin-left: 50%"><i class="ac"></i></div>
                                    <input type="file" name="avatar" id="getfile" style="display: none" accept="image/jpeg, image/png" multiple="">
                                @endif
                                @if(\Auth::user()->avatar)
                                    <div style="margin-left: 30%; margin-top: 10%"; > <img style="border-radius: 50%;" class="pull-left" src="source/img/avatar/{{\Auth::user()->avatar}}" width="230px" height="230px"> </div>
                                    <div class="ab" style="margin-left: 50%;"><i class="ac"></i></div>
                                    <input type="file" name="img" id="getfile" style="display: none" accept="image/jpeg, image/png" multiple="">
                                @endif
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

