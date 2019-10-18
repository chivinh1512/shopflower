@extends('front_end.master')
@section('content')
    @if(session('success'))
        <div class="alert alert-success" style="text-align: center; margin-left: 35%; font-size: 20px; width: 30%">{{session('success')}} </div>
    @endif
    <br><br>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0&appId=422307641749659&autoLogAppEvents=1"></script>
    <div class="productdetail">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" style="border: 1px solid">
                    <img src="source/img/products/{{$productdetail->img}}" title="bo-hoa-tuoi-happy-e01-247x296" width="80%"><br>
                    <a class="add-to-cart" href="/addproducttocart/{{$productdetail->id}}"><i class="fa fa-shopping-cart fa-2x" title="cho vào giỏ hàng"></i></a>
                </div>
                <div class="col-lg-4">
                    <h5>{{$productdetail->name}}</h5>
                    <hr>
                     {{$productdetail->detail}}
                    <div class="sub_desc even">
                        <h5>Lưu ý: Sản phẩm chỉ có ở Hồ Chí Minh và Hà Nội</h5>
                        <p>Sản phẩm bạn đang chọn là sản phẩm được thiết kế đặc biệt!</p>
                        <p>Hiện nay, Hoayeuthuong.com chỉ thử nghiệm cung cấp cho thị trường <strong>Tp. Hồ Chí Minh và Tp. Hà Nội</strong></p>
                    </div>
                </div>
                <div class="col-lg-4" style="padding-left:-10px ">
                    <img src="source/img/hinhle/dat-hoa-so-luong-lon.png" width="80%" style="padding-left: 3%"><br>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-2"></div>
        <div class="col"><hr> </div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col">
                    <br>
                    <h1>Phản hồi</h1>
                    <div class="commentfacebook" style="width: 1000px">
                        <div class="fb-comments" data-href="https://localhost/productdetail" data-width="1000" data-numposts="10"></div>
                    </div>
                    <h3>Sản phẩm cùng loại</h3>

                    <div class="row">
                        <div class="row">
                            @forelse($groupproduct as $gr)
                                <div class="col-3 boxproduct">
                                    <div class="boxpd">
                                        <a href="/productdetail/{{$gr->id}}">
                                            <div class="imgprod">
                                                <img src="source/img/products/{{$gr->img}}" width="80%" height="80%" style="margin-left: 10%">
                                            </div>
                                            <div class="nameprod">
                                                {{$gr->name}}
                                            </div>
                                            <div class="priceprod">
                                                {{$gr->price}} VNĐ
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @empty
                                <div style="padding-left: 30px">Không có kết quả</div>
                            @endforelse
                </div>
            </div>
    </div>
        <div class="col-2"></div>
    </div>
    <br>






@endsection
