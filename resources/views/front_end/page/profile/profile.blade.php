@extends('front_end.master')
@section('content')
    <br>
    <main>
        <div class="row">
            <div class="col-2"></div>
            <div class="col">
                <h4>Quản lý tài khoản</h4>

                 {{Auth::user()->name}}
                @if(empty(Auth::user()->avatar))
                    <img class="pull-left" src="source/img/avatar/aq.png" width="80px" height="80px">
                @endif
                @if(Auth::user()->avatar)
                    <img class="pull-left" src="source/img/avatar/{{Auth::user()->avatar}}" width="80px" height="80px">
                @endif
                <br>
                <a href="/profile/showprofile">Xem thông tin của bạn</a></span>
                <br><br>
                <h4>Lịch sử đơn hàng</h4>
                <a href="/historybill/1">Chờ xác nhận</a>
                <a href="/historybill/2">Đang giao hàng </a>
                <a href="/historybill/3">Đã hoàn thành</a>
                <a href="/historybill/4">Đã hủy</a>
            </div>
            <div class="col-2"></div>
        </div>
    </main>
@endsection
