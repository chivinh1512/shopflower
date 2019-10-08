@extends('admin.admin')
@section('content')
    <br>
<div class="row">
    <div class="col-2"></div>
             <div class="col-8">
                    <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Ngày đặt hàng</th>
                            <th>Id facebook</th>
                            <th>Giá tiền</th>
                            <th>Ghi chú</th>
                            <th>Chi tiết đơn hàng</th>
                        </tr>
                        @forelse($databills as $da)
                            <tr class="row-pd">
                                <td>{{$da->id}} </td>
                                <td>{{$da->created_at}}</td>
                                <td>{{$da->facebook_id}}</td>
                                <td>{{$da->total}}</td>
                                <td>{{$da->note}}</td>
                                <td>  <a href="admin/billmanager/{{$da->id}}" style="font-size: 20px;">Xem</a>
                                    @if($da->status==1)<a style="color: #ccc; font-size: 20px">  Chờ xác nhận </a>
                                    @endif
                                    @if($da->status==2)
                                        <a style="color: green; font-size: 20px">   Đã xác nhận </a>
                                    @endif
                                    @if($da->status==3)
                                        <a style="color: red; font-size: 20px">   Đã giao </a>
                                    @endif
                                    @if($da->status==4)
                                        <a style="color: black; font-size: 20px">   Đã hủy  </a>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <div style="padding-left: 30px">Không có kết quả</div>
                        @endforelse
                    </table>
            </div>
        <div class="col-2"></div>
             </div>
@endsection