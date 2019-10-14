@extends('front_end.master')
@section('content')
    <br>
    <main>
        <div class="row">
            <div class="col-2"></div>
            <div class="col">
                <h4>Quản lý tài khoản</h4>
                 {{Auth::user()->name}}
                <br>
                    <img src="{{Auth::user()->avatar}}" width="10%">
                <br>
                <a href="/profile/showprofile">Xem thông tin của bạn</a></span>
                <br><br>
                <h4>Lịch sử đơn hàng</h4>
                <a href="/historybill/1">Chờ xác nhận (<?php echo $stt1;?>) </a> &emsp;
                <a href="/historybill/2">Đang giao hàng (<?php echo $stt2;?>)</a>&emsp;
                <a href="/historybill/3">Đã hoàn thành (<?php echo $stt3;?>)</a>&emsp;
                <a href="/historybill/4">Đã hủy (<?php echo $stt4;?>)</a>&emsp;
            </div>
            <div class="col-2"></div>
        </div>
    </main>
@endsection
