@extends('front_end.master')
@section('content')
    <br>
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th style="text-align: center">Số thứ tự</th>
                        <th style="text-align: center">Tổng tiền</th>
                        <th style="text-align: center">Ghi chú</th>
                        <th style="text-align: center">Ngày đặt hàng</th>
                        <th style="text-align: center">Chi tiết đơn hàng</th>
                    </tr>
                    @foreach($bill as $bi)
                        <tr class="row-pd">
                            <td style="text-align: center">{{$loop->iteration}}</td>
                            <td style="text-align: center"><?php echo number_format($bi->total); ?> VNĐ</td>
                            <td style="text-align: center">{{$bi->note}}</td>
                            <td style="text-align: center">{{$bi->created_at}}</td>
                            <td style="text-align: center"><a href="billdetail/{{$bi->id}}">Xem</a> </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="col"></div>
    </div>
@endsection