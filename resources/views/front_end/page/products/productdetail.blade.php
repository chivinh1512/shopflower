@extends('front_end.master')
@section('content')
    @if(session('success'))
        <div class="alert alert-success"
             style="text-align: center; margin-left: 35%; font-size: 20px; width: 30%">{{session('success')}} </div>
    @endif
    <br><br>
    <script async defer crossorigin="anonymous"
            src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0&appId=422307641749659&autoLogAppEvents=1"></script>
    <div class="productdetail">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div style="border: 1px dotted "><img src="source/img/products/{{$productdetail->img}}" title="bo-hoa-tuoi-happy-e01-247x296"
                              width="80%" style="margin:10% 10%"><br></div>
                    <div style="border: 1px dotted;border-top: none">
                      <div style="text-align: center">  Mã SP: {{$productdetail->id}}</div>
                        <div class="line">
                        </div>
                        <a class="add-to-cart" href="/addproducttocart/{{$productdetail->id}}"><i
                                class="fa fa-shopping-cart fa-2x" title="cho vào giỏ hàng" style="margin:0% 45%"></i></a></div>

                </div>
                <div class="col-lg-4">
                    <h5>{{$productdetail->name}}</h5>
                    <div class="line"></div>
                <div style="font-size: 14px"> {{$productdetail->detail}}</div>
                    <div class="sub_desc even">
                        <h5>Lưu ý: Sản phẩm chỉ có ở Hồ Chí Minh và Hà Nội</h5>
                        <p>Sản phẩm bạn đang chọn là sản phẩm được thiết kế đặc biệt!</p>
                        <p>Hiện nay, Shop chỉ thử nghiệm cung cấp cho thị trường <strong>Tp. Hồ Chí Minh và
                                Tp. Hà Nội</strong></p>
                    </div>
                    <div class="sub_desc even orange">
                    <ul class="benefit">
                        <li>Tặng banner, thiệp (trị giá 20.000đ) miễn phí</li>
                        <li>Giảm ngay 20.000đ khi Bạn tạo đơn hàng online</li>
                        <li>Giảm tiếp 3% cho đơn hàng Bạn tạo ONLINE&nbsp;lần thứ 2, 5% cho đơn hàng Bạn&nbsp;tạo ONLINE lần thứ 6 và 10% cho đơn hàng Bạn&nbsp;tạo&nbsp;ONLINE&nbsp;lần thứ 12&nbsp;<em>(Chỉ áp dụng tại Tp. HCM)</em></li>
                        <li>Giao gấp trong vòng 2 giờ</li>
                        <li>Cam kết 100% hoàn lại tiền nếu Bạn không hài lòng</li>
                        <li>Cam kết hoa tươi trên 3 ngày</li>
                    </ul>
                    </div>
                </div>
                <div class="col-lg-4" style="background: #d4e9ff; width: 10%">
                    <img src="source/img/hinhle/dat-hoa-so-luong-lon.png" width="100%" style="margin: auto"><br>
                    <div class="line">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-2"></div>
        <div class="col">
            <hr>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <br>
            <h1>Phản hồi</h1>
            <div class="commentfacebook" style="width: 1000px">
                    <div class="fb-comments" data-href="https://localhost/productdetail" data-width="1000"
                         data-numposts="10"></div>
            </div>
            </div>
    </div>
            <h3>NHỮNG MẪU HOA TƯƠI CÙNG LOẠI</h3>

            <div class="container">
                <div class="row">
                    @forelse($groupproduct as $gr)
                        <div class="col-lg-3 boxproduct boxpd">
                                <a href="/productdetail/{{$gr->id}}">
                                    <div class="imgprod">
                                        <img src="source/img/products/{{$gr->img}}" width="80%" height="80%"
                                             style="margin-left: 10%">
                                    </div>
                                    <div class="nameprod">
                                        {{$gr->name}}
                                    </div>
                                    <div class="priceprod">
                                        {{$gr->price}} VNĐ
                                    </div>
                                </a>
                        </div>
                    @empty
                        <div style="padding-left: 30px">Không có kết quả</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection
