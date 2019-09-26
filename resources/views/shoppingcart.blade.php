@extends('master')
@section('content')
<br>
<div class="shoppingcart">
        <div class="row">
            <div class="col-2"></div>
            <div class="col">
                    <table style="width:100%">
                        <form action="" method="post">
                            <tr>
                              <th>Tên Sản phẩm</th>
                              <th>Giá</th>
                              <th>Số lượng</th>
                              <th>Thành tiền</th>
                              <th>Thao tác</th>
                            </tr>
                            <tr>
                              <td>Happy-01
                                  <img src="source/img/products/bo-hoa-tuoi-happy-flower-E02-247x296.jpg" width="200px" height="200px">
                              </td>
                              <td>200.000VNĐ</td>
                              <td> <select>
                                @for($i=1;$i<11;$i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                              </td>
                              <td>200.000VNĐ</td>
                              <td><a href="">Xóa</a> </td>
                            </tr>
                            <tr>
                            <td colspan="4">
                               Ghi chú: <input type="text" class="form-control" name="note"><br>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    <br>
                    Tổng tiền giỏ hàng
                    <hr class="motnua">
                    400.000VNĐ <br>
                    <button class="bt-sm boxproduct" type="submit">Thanh toán</button>
                    <br>
                    </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <br>
@endsection