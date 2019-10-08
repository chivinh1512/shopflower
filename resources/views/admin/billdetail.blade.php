@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>Các sản phẩm</th>
                        <th>Số Lượng</th>
                        <th>Giá</th>
                        <th>Tổng</th>
                    </tr>
                    @forelse($billdetail as $bi)
                        <tr class="row-pd">
                            <td>{{$bi->nameproduct}} </td>
                            <td>{{$bi->amount}}</td>
                            <td>{{$bi->price}}</td>
                            <td>{{$bi->total}}</td>
                        </tr>
                    @empty
                        <div style="padding-left: 30px">Không có kết quả</div>
                    @endforelse
                </table>
                <button>   <a href="admin/billmanager/{{$id}}/2" style="color: green; font-size: 20px">Xác nhận đơn hàng</a></button>
                <button> <a href="admin/billmanager/{{$id}}/3" style="color: red; font-size: 20px">Hủy đơn hàng</a></td></button>
                <button> <a href="admin/billmanager/{{$id}}/4" style="color: black; font-size: 20px">Đã giao</a></td></button>
                @php

                        @endphp
            </div>
        </div>
    </div>
@endsection