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
                        <th style="text-align: center">Sản phẩm</th>
                        <th style="text-align: center">Gía tiền</th>
                        <th style="text-align: center">Số lượng</th>
                        <th style="text-align: center">Tổng</th>
                    </tr>
                    @foreach($billdetail as $bi)

                        <tr class="row-pd">
                            <td style="text-align: center">{{$loop->iteration}}</td>
                            <td style="text-align: center">{{$bi->nameproduct}}</td>
                            <td style="text-align: center">{{$bi->price}}</td>
                            <td style="text-align: center">{{$bi->amount}}</td>
                            <td style="text-align: center">{{$bi->total}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="col"></div>
    </div>
    @if($stt==1)
    <div class="row">
        <div class="col"></div>
        <form action="" method="post">
            @csrf
            <input type="submit" value="Hủy đơn hàng">
        </form>
        <div class="col"></div>
    </div>
    @endif
@endsection