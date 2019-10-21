@extends('front_end.master')
@section('content')
<br>
    <div class="product">
        <div class="row">
            <div class="col-2"></div>
            <div class="col">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            DANH MỤC<hr class="st">
                            <ul class="">
                                @foreach($categories as $cate)
                                    <li style="text-transform: uppercase;"> <a class="rowpro" href="{{ route('user.products', ['id' => $cate->id]) }}">{{$cate->name}}</a></li>
                                    <hr class="hrboxpd">
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-lg-9">
                            <div class="container">
                                <div class="row">
                                    @forelse($listproduct as $list)
                                        <div class="col-lg-3 boxproduct">
                                            <div class="boxpd">
                                                <a href="/productdetail/{{$list->id}}">
                                                    <div class="imgprod">
                                                        <img src="source/img/products/{{$list->img}}" width="100%" height="100%">
                                                    </div>
                                                    <div class="nameprod">
                                                        {{$list->name}}
                                                    </div>
                                                    <div class="priceprod">
                                                        {{$list->price}} VNĐ
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
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    @endsection
