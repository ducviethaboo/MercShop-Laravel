@extends('admin.core.master')
@section('content')
    <form enctype="multipart/form-data" action="{{route('admin.add')}}" method="post" class="form-horizontal" role="form">
        @csrf
        <div class="container mt-5">
            <h1>Thêm sản phẩm vào kho</h1>
            <hr>
            <div class="row">
                <!-- left column -->
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                        <br>
                        <br>
                        <h6>Thay đổi ảnh khác</h6>
                        <input name="productImg" style="border: 0px" type="file" class="form-control">
                    </div>
                </div>

                <!-- edit form column -->
                <div class="col-md-9 personal-info">
                    <h3>Thông tin sản phẩm</h3>

                    @csrf
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Tên sản phẩm:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="productName" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Loại xe:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="productType">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Màu sắc:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="productColor">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Giá sản phẩm:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="productPrice">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Mô tả sản phẩm:</label>
                        <div class="col-lg-8">
                            <textarea name="productDesc" id="" cols="63" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="error-message">
                        @if ($errors->any())
                            @foreach($errors->all() as $nameError)
                                <p style="color:red">{{ $nameError }}</p>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-success" value="Thêm sản phẩm vào kho">
                            <a class="btn btn-danger" href="{{route('admin.show')}}">Huỷ bỏ</a>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
