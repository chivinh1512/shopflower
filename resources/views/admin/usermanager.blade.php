@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>Tên</th>
                        <th>Facebook_id</th>
                        <th>Địa chỉ</th>
                        <th>Avatar</th>
                        <th>Phone</th>
                        <th>Ngày tham gia</th>
                        <th>Level</th>
                    </tr>
                    @forelse($datausers as $da)
                        <tr class="row-pd">
                            <td>{{$da->name}}</td>
                            <td>{{$da->facebook_id}}</td>
                            <td>{{$da->address}}</td>
                            <td><img src="{{$da->avatar}}" style="width: 70px"/></td>
                            <td>{{$da->phone}}</td>
                            <td>{{$da->created_at}}</td>
                            <td>{{$da->level}}</td>
                        </tr>
                    @empty
                        <div style="padding-left: 30px">Không có kết quả</div>
                    @endforelse
                </table>
                {{$datausers->links()}}

                <div class="col-sm-1"></div>
            </div>
@endsection
