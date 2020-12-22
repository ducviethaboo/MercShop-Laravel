@extends('core.master')
@section('content')
    <div class="main">
        @if(session()->has('alert'))
            <section class='alert alert-success'>{{session()->get('alert')}}</section>
        @endif
        <div class="shop_top">
            <div class="container">
                <form action="{{route('user.testdriver.register')}}" method="post">
                    @csrf
                    @if(session()->has('login'))
                        <input name="userTest" type="hidden" value="{{session()->get('login')[0][0]}}">
                    @endif
                    <div class="register-top-grid">
                        <h2>Đăng ký lái thử</h2>
                        <div>
                            <span>Mẫu xe lái thử<label>*</label></span>
                            <select name="productTest" id="inputState" class="form-control">
                                @foreach($products as $product)
                                    <option value="{{$product->id}}" selected>{{$product->productName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="clear"> </div>
                    <div class="register-bottom-grid">
                        <div>
                            <input name="status" type="hidden" value="Chưa xử lý">
                            <span>Ngày đăng ký lái thử<label>*</label></span>
                            <input name="testDate" type="date">
                        </div>
                        <div class="clear"> </div>
                    </div>
                    <div class="clear"> </div>
                    @if ($errors->any())
                        @foreach($errors->all() as $nameError)
                            <p style="color:red">{{ $nameError }}</p>
                        @endforeach
                    @endif
                    <input style="font-size: 18px" class="btn btn-primary" type="submit" value="Xác nhận">
                    <a class="btn" href="{{route('home')}}">Quay lại trang chủ</a>
                </form>
            </div>
        </div>
    </div>
@endsection
