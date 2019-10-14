@extends('admin.admin')
@section('content')
    <br>
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <table class="table table-bordered">
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Thao tác</th>
                </tr>
                @forelse($datacontacts as $da)
                    <tr class="row-pd">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$da->name}}</td>
                        <td>{{$da->phone}}</td>
                        <td>{{$da->email}}</td>
                        <td>{{$da->subject}}</td>
                        <td>{{$da->message}}</td>
                        <td>
                            <a href="admin/contactmanager/delete/{{$da->id}}">Xóa</a>
                        </td>
                    </tr>
                @empty
                    <div style="padding-left: 30px">Không có kết quả</div>
                @endforelse
            </table>
        </div>
        <div class="col"></div>
    </div>
@endsection
