<header>

    <div class="row">

        <div class="col-2"></div>

        <div class="col-8">

            <div class="row">

                <div class="col-4">

                    <a href="https://www.facebook.com/saigonroses/">

                        <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>

                    </a>

                    <a href="">

                        <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>

                    </a>

                    <a href="">

                        <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>

                    </a>

                </div>

                <div class="col-4">

                    <img src="source/img/logo/logo.jpg" alt="">
                </div>

                <div class="col-4 down">

                    <div class="row">
                        @if(\Auth::user())
                            <br>
                            Xin chao : {{\Auth::user()->name}}
                        @endif
                        @if(!\Auth::user())
                        <div class="col-md-12 fb">
                            <a href="{{ url('auth/facebook') }}" class="btn btn-lg btn-primary btn-block">
                                <strong>Login Facebook</strong>
                            </a>
                        </div>
                        @endif
                    </div>

                    <a href="/shoppingcart">
                        <i class="fa fa-shopping-bag fa-2x" aria-hidden="true" style="margin-left: 130px; margin-top: 10px;"></i>
                    </a>

                </div>

            </div>

        </div>

        <div class="col-2"></div>

    </div>

</header>

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
{{--            @if($customer->facebook_id == 910332716006384)--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Quan tri website</a>--}}
{{--                </li>--}}
{{--            @endif--}}



        </ul>

        <form class="form-inline my-2 my-lg-0" method="get" action="{{'search'}}">
            <input class="form-control mr-sm-2" type="text" name="key" placeholder="Tìm sản phẩm" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

    </div>

</nav>
