@extends('front_end.master')
@section('content')
<br>
<?php
$cart = \Session::get('cart');
?>
<div class="shoppingcart">
        <div class="row">
            <div class="col-2"></div>
            <div class="col">
                <form action="" method="post">
                    @csrf()
                    @if(\Auth::user())
                        <input type="hidden" name="facebook_id" value=" {{\Auth::user()->facebook_id}}">
                    @endif

                    @if(isset($cart))
                        <table style="width:100%">

                                <tr>
                                  <th>Tên Sản phẩm</th>
                                  <th>Hình sản phẩm</th>
                                  <th>Giá</th>
                                  <th>Số lượng</th>
                                  <th>Thành tiền</th>
                                  <th>Thao tác</th>
                                </tr>
                                @if($cart != null)
                                    @php $j = 0;@endphp
                                    @php $totalall = 0; @endphp
                                    @foreach($cart as $va)
                                        @foreach($va as $id => $v)
                                          <input type="hidden" name="idproduct[]" value="{{$id}}">
                                                <tr>
                                                  <td class="name">
                                                      {{$v['name']}}
                                                  </td>
                                                  <td>
                                                      <img src="source/img/products/{{$v['img']}}" width="200px" height="200px" style="margin-left: 18%">
                                                  </td>
                                                  <td class="price">{{$v['price']}}VNĐ</td>
                                                  <td>
                                                      <select class="productqty" name="amount[]">
                                                          @for($i=1;$i<11;$i++)
                                                              <option @php if($i==$v['amount']){echo 'selected';} @endphp>{{$i}}</option>
                                                          @endfor
                                                      </select>
                                                  </td>
                                                  <td class="total">{{$v['price']*$v['amount']}}VNĐ</td>
                                                  <td><a href="{{url("/delproductincart/?stt={$j}")}}">Xóa</a> </td>
                                                </tr>
                                        @php $j += 1;@endphp
                                        @php $totalall = $totalall + ($v['amount'])*($v['price']) @endphp
                                        @endforeach
                                    @endforeach
                                @endif
                                                <tr>
                                                    <td colspan="4" style="text-align: center">Tổng tiền</td>
                                                    <td class="totalall">
                                                        {{$totalall}}
                                                    </td>
                                                    <input type="hidden" name="totalall" class="vinh" value="{{$totalall}}">
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                <td colspan="5">
                                                   Ghi chú: <input type="text" class="form-control" name="note"><br>
                                                </td>
                                                <td></td>
                                            </tr>

                        </table>
                        <br>

                        <button class="bt-sm boxproduct" type="submit">Thanh toán</button>
                        <br>
                </form>
                @else
                    <div style="text-align: center">Bạn chưa chọn sản phẩm</div>
                @endif
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <br>
@endsection
