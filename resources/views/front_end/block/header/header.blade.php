
<header>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v4.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat"
         attribution=setup_tool
         page_id="112031363539575"
         theme_color="#d696bb"
         logged_in_greeting="Xin chào ! Chúng tôi đã sẵn sàng tư vấn hỗ trợ"
         logged_out_greeting="Xin chào ! Chúng tôi đã sẵn sàng tư vấn hỗ trợ">
    </div>
    <?php
    if (Session::get('cart')==null){
        $soluongsanphamtrongcart='0';
    }
    else{
        $cart = Session::get('cart');
        $soluongsanphamtrongcart=count($cart);
    }
    ?>
    <div class="container">
        <div class="row">
                        <div class="col-lg-4">
                            <a href="https://www.facebook.com/Shop-hoa-tươi-Sài-Gòn-112031363539575">
                                <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <img src="source/img/logo/logo.jpg" alt="">
                        </div>
                        <div class="col-lg-4">
                            <br>
                                @if(Auth::user())
                                    <div style="margin: 0px 0px 0px 35%"> <a href="/profile"> Xin chào : {{Auth::user()->name}}</a></div>
                                @endif
                                @if(!Auth::user())
                                    <div class="col-lg-12" style="margin-left: 25%">
                                        <a href="{{ url('auth/facebook') }}" class="btn btn-lg btn-primary" style="text-align: right">
                                            <strong>Login Facebook</strong>
                                        </a>
                                    </div>
                                @endif
                            <a href="/shoppingcart">
                                <i class="fa fa-shopping-bag fa-2x" title="Xem giỏ hàng" aria-hidden="true" style="margin-left: 60%; margin-top:3%;"><p style="color: pink">({{$soluongsanphamtrongcart}})</p> </i>
                            </a>
                        </div>
        </div>
    </div>
</header>
<br>
<div class="container">
    <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light menu">
                <a class="navbar-brand" href="/">Trang chủ</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sản phẩm
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        @foreach ($categories as $cate)
                                    <a class="dropdown-item" href="products/{{$cate->id}}">{{$cate->name}}</a>
                        @endforeach
                        <li class="nav-item">
                            <a class="nav-link" href="#">Giới thiệu</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact">Liên hệ</a>
                        </li>
                        @if(Auth::user())
                            @if((Auth::user()->facebook_id==910332716006384))
                            <li class="nav-item">
                                <a class="nav-link" href="/admin">Quản trị website</a>
                            </li>
                            @endif
                        @endif
                    </ul>
                    <form class="form-inline my-2 my-lg-0" method="get" action="{{'search'}}">
                        <input class="form-control mr-sm-2" type="text" name="key" placeholder="Tìm sản phẩm" aria-label="Search">
                        <button class="btn btn-solid btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
    </div>
</div>
