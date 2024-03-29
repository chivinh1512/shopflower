@extends('front_end.master')
@section('content')
    <br>
    <div class="product">
        <p>Tìm thấy {{count($products)}} sản phẩm</p>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            @forelse($products as $list)
                                <div class="col-3 boxproduct">
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
            <div class="col-2"></div>
        </div>
    </div>
@endsection