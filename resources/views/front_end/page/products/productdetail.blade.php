@extends('front_end.master')
@section('content')
    <br><br>
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
                                    <li>Trường hợp không đủ số lượng hoa như mẫu đã chọn, nhân viên tư vấn sẽ liên hệ với Quý khách hàng để lựa chọn mẫu hoa thay thế phù hợp</li>
                                    <li> Sản phẩm bao gồm : {{$productdetail->detail}} </li>
                                </ul>
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart fa-2x" title="cho vào giỏ hàng"></i></a>
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
            <div class="row">
                <div class="col">
                    2 bình luận về Happy03

                    <div class="khungcomment">
                        <div class="nameuser">
                            <b>Vinh</b>
                        </div>
                        <div class="content">
                            Hoa rất đẹp
                        </div>
                        <div class="time">
                            Đã gởi vào<p>19/8/2014</p>
                        </div>

                    </div>
                    <br>
                    <div class="khungcomment">
                        <div class="nameuser">
                            <b>Lân</b>
                        </div>
                        <div class="content">
                            Hoa xấu ớn
                        </div>
                        <div class="time">
                            Đã gởi vào<p>19/7/2020</p>
                        </div>

                    </div>
                    <br>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>



                    <form method="post">
                        <div class="comment">
                            <textarea name="content" style="height: 100px;width: 100%" placeholder="Mời bạn để lại bình luận"></textarea>
                            <input type="submit">
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <br>
            <h3>Sản phẩm cùng loại</h3>

            <div class="row">
                @foreach($groupproduct as $gr)
                <div class="col-3">
                    <a href="/productdetail/{{$gr->id}}">
                        <div class="boxpd">
                            <div class="imgprod">
                                <img src="source/img/products/{{$gr->img}}" width="80%" height="50%">
                            </div>
                            <div class="nameprod">
                                {{$gr->name}}
                            </div>
                            <div class="priceprod">
                                {{$gr->price}}
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
    </div>
        </div>

        <div class="col-2"></div>
    </div>
    <br>






@endsection