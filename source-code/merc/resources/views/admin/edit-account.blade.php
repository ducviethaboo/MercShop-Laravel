@extends('admin.core.master')
@section('content')
    <form action="{{route('admin.edit.account.post')}}" method="post" class="form-horizontal" role="form">
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
                            <input type="hidden" name="id" value="{{$account->id}}">
                            <input class="form-control" disabled type="text" value="{{$account->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input disabled class="form-control" type="text" value="{{$account->email}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Số điện thoại:</label>
                        <div class="col-lg-8">
                            <input disabled class="form-control" type="text" value="{{$account->phone}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Role:</label>
                        <select name="role" style="width: 100px; margin-left: 12px" class="form-control">
                                <option value="Admin" selected>Admin</option>
                                <option value="User" selected>User</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-success" value="Cập nhật">
                            <a class="btn btn-danger" href="{{route('admin.delete.account', $account->id)}}">Xoá tài khoản</a>
                            <a style="color: #00AAF0" class="btn" href="{{route('admin.account')}}">Quay lại</a>
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
