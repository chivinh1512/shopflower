@extends('front_end.master')
@section('content')
    <br>
    @if(session('sent'))
        <div class="alert alert-success" style="text-align: center;font-size: 30px">{{session('sent')}} </div>
    @endif
    <div class="row">
        <div class="col-2"></div>
            <div class="col-8">
                <div>
                    <b>Địa chỉ shop: 780 Hưng Phú phường 10 quận 8, Tp Hồ Chí Minh</b><br><br>
                    <div id="map" style="width:80%;height:80%;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.854695764777!2d106.66312495090007!3d10.745679992304797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752e5791c7cc7d%3A0xe4afed9612b361e2!2zNzgwIEjGsG5nIFBow7osIFBoxrDhu51uZyAxMCwgUXXhuq1uIDgsIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1570440768945!5m2!1sen!2s" width="120%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>            </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <br>
                        <h3 style="text-align: left">Form nhận ý kiến phản hồi</h3>
                        <h6>Chúng tôi rất vui nếu bạn dành chút thời gian để góp ý, phản hồi về sản phẩm cũng như dịch vụ của shop, mỗi phản hồi của bạn sẽ được xem xét để shop phát triển tốt hơn</h6>
                        <form action="" method="post">
                            @csrf
                            <div>
                                <input name="name" type="text" placeholder="Tên của bạn" style="width: 60%"><br><br>
                            </div>
                            <div>
                                <input name="email" type="email" placeholder="Email của bạn" style="width: 60%"><br><br>
                            </div>
                            <div>
                                <input name="phone" type="number" placeholder="Số điện thoại" style="width: 60%"><br><br>
                            </div>
                            <div>
                                <input name="subject" type="text" placeholder="Tiêu đề" style="width: 60%"><br><br>
                            </div>
                            <div>
                                <textarea name="message" placeholder="Thông tin phản hồi của bạn" style="width: 80%"></textarea><br><br>
                            </div>
                            <div>
                                <button type="submit">Gởi <i class="fa fa-chevron-right"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-4" style="text-align: center">
                        <br>
                        Thông tin liên hệ<br>

                        Địa chỉ<br>
                        Cửa hàng hoa Saigon Roses <br>
                        780 Hưng Phú, phường 10, quận 8<br>
                        Thành phố Hồ Chí Minh<br><br>

                        Thông tin cửa hàng<br>
                        Công ty trách nhiệm hữu hạn một thành viên <br><br>

                        Tuyển dụng <br>
                        Chúng tôi luôn tìm kiếm những người có tài
                        gia nhập đội ngũ của chúng tôi.<br><br>
                        vinh.huongtri@mor.com.vn
                    </div>
                </div>
            </div>
        <div class="col-2"></div>
    </div>


@endsection
