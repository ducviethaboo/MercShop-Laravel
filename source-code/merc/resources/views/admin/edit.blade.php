@extends('admin.core.master')
@section('content')
    <form enctype="multipart/form-data" action="{{route('admin.edit')}}" method="post" class="form-horizontal"
          role="form">
        @csrf
        <div class="container mt-5">
            <h1>Sửa thông tin sản phẩm</h1>
            <hr>
            <div class="row">
                <!-- left column -->
                <div class="col-md-3">
                    <div class="text-center">
                        <img style="width: 100%;" src='{{asset("$product->productImg")}}' class="avatar img-circle"
                             alt="avatar">
                        <br>
                        <br>
                        <h6>Thay đổi ảnh khác</h6>
                        <input name="productImg" style="border: 0px" type="file" class="form-control">
                    </div>
                </div>
                <!-- edit form column -->
                <div class="col-md-9 personal-info">
                    <input type="hidden" name="productId" value="{{$product->id}}">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Tên sản phẩm:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="productName" type="text"
                                   value="{{$product->productName}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Loại xe:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="productType"
                                   value="{{$product->productType}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Màu sắc:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="productColor"
                                   value="{{$product->productColor}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Giá sản phẩm:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="productPrice"
                                   value="{{$product->productPrice}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Mô tả sản phẩm:</label>
                        <div class="col-lg-8">
                            <textarea name="productDesc"  cols="30" rows="10">{{$product->productDesc}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-success" value="Lưu thay đổi">
                            <a class="btn-danger btn" href="{{route('admin.show')}}">Huỷ bỏ</a>
                            <span></span>
                        </div>
                    </div>
                    <div class="error-message">
                        @if ($errors->any())
                            @foreach($errors->all() as $nameError)
                                <p style="color:red">* {{ $nameError }}</p>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </form>
@endsection
