@extends('admin.core.master')
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Danh sách khách hàng đăng ký lái thử xe
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table style="text-align: center" class="table table-bordered" id="dataTable" width="100%"
                       cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên khách hàng</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Xe đăng ký</th>
                        <th>Tình trạng</th>
                        <th>Ngày đăng ký</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    {{--                    {{dd($testDriversList)}}--}}
                    @foreach($testDriversList as $key=>$value)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->phone}}</td>
                            <td>Mercedes-Benz {{$value->productName}}</td>
                            @if($value->status === "Chưa xử lý")
                                <td><p style="color:#e60000">{{$value->status}}</p></td>
                            @else
                                <td><p style="color: #00ff00">{{$value->status}}</p></td>
                            @endif
                            <td>{{$value->testDate}}</td>
                            <td><a href="{{route('admin.edit-test-driver', $value->id)}}">Sửa</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
