@extends('admin.core.master')
@section('content')
    @if(session()->has('alert'))
        <section class='alert alert-success'>{{session()->get('alert')}}</section>
    @endif
<form action="{{route('admin.edit-status-test-driver')}}" method="post" class="form-horizontal" role="form">
    @csrf
    <div class="container mt-5">
        <h1>Thông tin khách hàng</h1>
        <hr>
        <div class="row">
            <div class="col-md-9 personal-info">
                @csrf
                <div class="form-group">
                    <label class="col-lg-3 control-label">Tên khách hàng:</label>
                    <div class="col-lg-8">
                        <input type="hidden" name="id" value="{{$userEdit[0]->id}}">
                        <input class="form-control" disabled type="text" value="{{$userEdit[0]->name}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                        <input disabled class="form-control" type="text" value="{{$userEdit[0]->email}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Số điện thoại:</label>
                    <div class="col-lg-8">
                        <input disabled class="form-control" type="text" value="{{$userEdit[0]->phone}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Xe đăng ký:</label>
                    @if(count($userEdit) > 1)
                        @foreach($userEdit as $value)
                    <div class="col-lg-8">
                        <input disabled class="form-control" type="text" value="Mercedes-Benz {{$value->productName}}">
                    </div>
                        @endforeach
                    @else
                        <div class="col-lg-8">
                            <input disabled class="form-control" type="text" value="Mercedes-Benz {{$userEdit[0]->productName}}">
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Trạng thái:</label>
                    <select name="status" style="width: 110px; margin-left: 12px" class="form-control">
                        <option value="Chưa xử lý" selected>Chưa xử lý</option>
                        <option value="Đã xử lý" selected>Đã xử lý</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <input type="submit" class="btn btn-success" value="Cập nhật">

                        <span></span>
                    </div>
                </div>

                <div class="error-message">
                    @if ($errors->any())
                    @foreach($errors->all() as $nameError)
                    <p style="color:red">{{ $nameError }}</p>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
