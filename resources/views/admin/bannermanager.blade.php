@extends('admin.admin')
@section('content')
    <br>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form action="" method="post">
                @csrf
                Hình : <input type="file" name="img"><br><br>
                <input type="submit" name="them" class="btn btn-dark col-md-1 ml-3" value="thêm"><br><br>
            </form>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>Số thứ tự</th>
                        <th>Hình</th>
                        <th>Ngày update</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                    @forelse($dataslides as $da)
                        <tr class="row-pd">
                            <td>{{$loop->iteration}}</td>
                            <td><img src="source/img/slide/{{$da->img}}" width="80%"></td>
                            <td>{{$da->created_at}}</td>
                            <td><a href="admin/bannermanager/delete/{{$da->id}}">Xóa</a></td>
                        </tr>
                    @empty
                        <div style="padding-left: 30px">Không có kết quả</div>
                    @endforelse
                </table>
            </div>
            <div class="col-2"></div>
        </div>
@endsection
