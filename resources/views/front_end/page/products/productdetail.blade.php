@extends('front_end.master')
@section('content')
    @if(session('success'))
        <div class="alert alert-success" style="text-align: center; margin-left: 35%; font-size: 20px; width: 30%">{{session('success')}} </div>
    @endif
    <br><br>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0&appId=422307641749659&autoLogAppEvents=1"></script>
    <div class="productdetail">
        <div class="row">
            <div class="col-2"></div>
            <div class="col">
                <div class="row">
                    <div class="product-main">
                        <div class="row content-row mb-0">
                                    <div class="pd-img">
                                        <img src="source/img/products/{{$productdetail->img}}" title="bo-hoa-tuoi-happy-e01-247x296" width="350px" height="350px">
                                    </div>
                            <div class="product-info summary col-fit col entry-summary product-summary form-flat">
                                <h1>{{$productdetail->name}}</h1>
                                <div class="price">{{$productdetail->price}}VNĐ</div>

                                <div class="message-box relative"><div class="container relative"><div class="inner last-reset">

                                            <div class="row row-small align-middle align-center">

                                                <div class="col medium-7 small-12 large-7"><div class="col-inner text-center" style="margin:0 0px 0px 0px;">
                                                        <div class="tuvan">
                                                            <div class="tuvan1">Tư vấn đặt hoa : </div>
                                                            <div class="tuvan2">0339-222-265</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div></div>
                                <div class="gap-element clearfix" style="display:block; height:auto; padding-top:0px"></div>
                                <ul>
                                    <li>Giao hàng nhanh trong vòng 2h kể từ khi hoàn tất thanh toán</li>
                                    <li>Tặng kèm thiệp chúc mừng, băng rôn, bảng treo theo thông điệp yêu cầu</li>
                                    <li>Màu sắc hoa tươi sẽ thay đổi theo mùa, khí hậu của từng khu vực giao hoa</li>
                                    <li> Sản phẩm bao gồm : {{$productdetail->detail}} </li>
                                </ul>
                                <a class="add-to-cart" href="/addproducttocart/{{$productdetail->id}}"><i class="fa fa-shopping-cart fa-2x" title="cho vào giỏ hàng"></i></a>
                            </div><!-- .summary -->

                            <div id="product-sidebar" class="mfp-hide">
                                <div class="sidebar-inner">
                                </div><!-- .sidebar-inner -->
                            </div>

                        </div><!-- .row -->
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
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
