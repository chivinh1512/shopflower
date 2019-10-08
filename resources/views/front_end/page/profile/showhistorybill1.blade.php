@extends('front_end.master')
@section('content')
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <?php
                dump($bill->toArray());
            ?>
        </div>
        <div class="col"></div>
    </div>
@endsection