{{--@extends('core.master')--}}
{{--@section('content')--}}
{{--    <div class="main">--}}
{{--        <div class="shop_top">--}}
{{--            <div class="container">--}}
{{--                <form method="post" action="{{route('user.registerPost')}}">--}}
{{--                    @csrf--}}
{{--                    <div class="register-top-grid">--}}
{{--                        <h2>Đăng ký tài khoản</h2>--}}
{{--                        <br>--}}
{{--                        <div>--}}
{{--                            <span>Họ và tên:<label>*</label></span>--}}
{{--                            <input name="name" type="text">--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <span>Số điện thoại:<label>*</label></span>--}}
{{--                            <input name="phone" type="text">--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <span>Email<label>*</label></span>--}}
{{--                            <input name="email" type="text">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="clear"></div>--}}
{{--                    <div class="register-bottom-grid">--}}
{{--                        <div>--}}
{{--                            <span>Mật khẩu<label>*</label></span>--}}
{{--                            <input style="border: 1px solid #EEE;--}}
{{--    outline-color: #00BFF0;--}}
{{--    width: 96%;--}}
{{--    font-size: 1em;--}}
{{--    padding: 0.5em;--}}
{{--    font-family: 'Open Sans', sans-serif;" name="password" type="password">--}}
{{--                        </div>--}}
{{--                        @if ($errors->any())--}}
{{--                            @foreach($errors->all() as $nameError)--}}
{{--                                <p style="color:red">{{ $nameError }}</p>--}}
{{--                            @endforeach--}}
{{--                        @endif--}}
{{--                        <div class="clear"></div>--}}
{{--                    </div>--}}
{{--                    <div class="clear"></div>--}}
{{--                    <input style="font-size: 18px" class="btn-primary btn" type="submit" value="Đăng ký">--}}
{{--                    <a class="btn" href="{{route('home')}}">Quay lại trang chủ</a>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--@endsection--}}

{{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>--}}
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--<!------ Include the above in your HEAD tag ---------->--}}

{{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">--}}
{{--<style>.divider-text {--}}
{{--        position: relative;--}}
{{--        text-align: center;--}}
{{--        margin-top: 15px;--}}
{{--        margin-bottom: 15px;--}}
{{--    }--}}

{{--    .divider-text span {--}}
{{--        padding: 7px;--}}
{{--        font-size: 12px;--}}
{{--        position: relative;--}}
{{--        z-index: 2;--}}
{{--    }--}}

{{--    .divider-text:after {--}}
{{--        content: "";--}}
{{--        position: absolute;--}}
{{--        width: 100%;--}}
{{--        border-bottom: 1px solid #ddd;--}}
{{--        top: 55%;--}}
{{--        left: 0;--}}
{{--        z-index: 1;--}}
{{--    }--}}

{{--    .btn-facebook {--}}
{{--        background-color: #405D9D;--}}
{{--        color: #fff;--}}
{{--    }--}}

{{--    .btn-twitter {--}}
{{--        background-color: #42AEEC;--}}
{{--        color: #fff;--}}
{{--    }</style>--}}

{{--<div class="container">--}}
{{--    <hr>--}}
{{--    <div class="card bg-light">--}}
{{--        <article class="card-body mx-auto" style="max-width: 400px;">--}}
{{--            <h4 class="card-title mt-3 text-center">Đăng ký tài khoản</h4>--}}
{{--            <form method="post" action="{{route('user.registerPost')}}">--}}
{{--                @csrf--}}
{{--                <div class="form-group input-group">--}}
{{--                    <div class="input-group-prepend">--}}
{{--                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>--}}
{{--                    </div>--}}
{{--                    <input name="name" class="form-control" placeholder="Họ và tên" type="text">--}}
{{--                </div>--}}
{{--                <div class="form-group input-group">--}}
{{--                    <div class="input-group-prepend">--}}
{{--                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>--}}
{{--                    </div>--}}
{{--                    <input name="email" class="form-control" placeholder="Email" type="email">--}}
{{--                </div>--}}
{{--                <div class="form-group input-group">--}}
{{--                    <div class="input-group-prepend">--}}
{{--                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>--}}
{{--                    </div>--}}
{{--                    <select class="custom-select" style="max-width: 120px;">--}}
{{--                        <option selected="">+84</option>--}}
{{--                        <option value="1">+972</option>--}}
{{--                        <option value="2">+198</option>--}}
{{--                        <option value="3">+701</option>--}}
{{--                    </select>--}}
{{--                    <input name="phone" class="form-control" placeholder="Số điện thoại" type="text">--}}
{{--                </div>--}}
{{--                <div class="form-group input-group">--}}
{{--                    <div class="input-group-prepend">--}}
{{--                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>--}}
{{--                    </div>--}}
{{--                    @if ($errors->any())--}}
{{--                    @foreach($errors->all() as $nameError)--}}
{{--                        <p style="color:red">{{ $nameError }}</p>--}}
{{--                    @endforeach--}}
{{--                    @endif--}}
{{--                    <input class="form-control" name="password" placeholder="Mật khẩu" type="password">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <button type="submit" class="btn btn-primary btn-block">Tạo tài khoản</button>--}}
{{--                </div>--}}
{{--                <p class="text-center">Bạn đã có tài khoản? <a href="{{route('login')}}">Đăng nhập</a></p>--}}
{{--            </form>--}}
{{--        </article>--}}
{{--    </div>--}}
{{--</div>--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<style>
    :root {
        --input-padding-x: 1.5rem;
        --input-padding-y: .75rem;
    }
    body {
        background-image: url("https://www.elleman.vn/wp-content/uploads/2020/02/15/new-logo-thuong-hieu-elle-man-0220-IM-car-experts.jpg");
    }


    .card-signin {
        border: 0;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .card-signin .card-title {
        margin-bottom: 2rem;
        font-weight: 300;
        font-size: 1.5rem;
    }

    .card-signin .card-img-left {
        width: 45%;
        /* Link to your background image using in the property below! */
        background: scroll center url('https://i.pinimg.com/564x/f4/6c/9f/f46c9f5ef068da5b96d4a53a236463eb.jpg');
        background-size: cover;
    }

    .card-signin .card-body {
        padding: 2rem;
    }

    .form-signin {
        width: 100%;
    }

    .form-signin .btn {
        font-size: 80%;
        border-radius: 5rem;
        letter-spacing: .1rem;
        font-weight: bold;
        padding: 1rem;
        transition: all 0.2s;
    }

    .form-label-group {
        position: relative;
        margin-bottom: 1rem;
    }

    .form-label-group input {
        height: auto;
        border-radius: 2rem;
    }

    .form-label-group>input,
    .form-label-group>label {
        padding: var(--input-padding-y) var(--input-padding-x);
    }

    .form-label-group>label {
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        margin-bottom: 0;
        /* Override default `<label>` margin */
        line-height: 1.5;
        color: #495057;
        border: 1px solid transparent;
        border-radius: .25rem;
        transition: all .1s ease-in-out;
    }

    .form-label-group input::-webkit-input-placeholder {
        color: transparent;
    }

    .form-label-group input:-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-moz-placeholder {
        color: transparent;
    }

    .form-label-group input::placeholder {
        color: transparent;
    }

    .form-label-group input:not(:placeholder-shown) {
        padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
        padding-bottom: calc(var(--input-padding-y) / 3);
    }

    .form-label-group input:not(:placeholder-shown)~label {
        padding-top: calc(var(--input-padding-y) / 3);
        padding-bottom: calc(var(--input-padding-y) / 3);
        font-size: 12px;
        color: #777;
    }

    .btn-google {
        color: white;
        background-color: #ea4335;
    }

    .btn-facebook {
        color: white;
        background-color: #3b5998;
    }
</style>
<body>
<div class="container">
    <div class="row">
        <div  class="col-lg-10 col-xl-9 mx-auto">
            <div style="box-shadow: 5px 10px 18px grey" class="card card-signin flex-row my-5">
                <div class="card-img-left d-none d-md-flex">
                    <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Đăng ký tài khoản</h5>
                    <form method="post" action="{{route('user.registerPost')}}">
                        @csrf
                    <div class="form-label-group">
                            <input type="text" id="inputUserame" class="form-control" placeholder="Họ và tên" name="name">
                            <label for="inputUserame">Họ và tên</label>
                        </div>

                        <div class="form-label-group">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required>
                            <label for="inputEmail">Email</label>
                        </div>

                        <hr>

                        <div class="form-label-group">
                            <input type="text" id="inputPassword" class="form-control" placeholder="Số điện thoại" name="phone">
                            <label for="inputPassword">Số điện thoại</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Mật khẩu" name="password">
                            <label for="inputConfirmPassword">Mật khẩu</label>
                        </div>
                        <div class="error-message">
                            @if ($errors->any())
                                @foreach($errors->all() as $nameError)
                                    <p style="color:red">{{ $nameError }}</p>
                                @endforeach
                            @endif
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng ký tài khoản</button>
                        <a class="d-block text-center mt-2 small" href="{{route('login')}}">Đăng nhập</a>
                        <a class="d-block text-center mt-2 small" href="{{route('home')}}">Quay lại</a>
                        <hr class="my-4">
                    </form>
                    <div style="display: inline; text-align: center" class="col-md-3">
                        <table>
                            <h3>Việt Hà Auto</h3>
                            <br>
                            <tr>
                                <td style="text-align: center"><p class='fas fa-map-marker-alt' style='font-size:17px'></p></td>
                                <td style="text-align: left"><p>Địa chỉ: 89 Bồ Đề, Long Biên, Hà Nội</p></td>
                            </tr>
                            <tr>
                                <td style="text-align: center"><p class='fas fa-envelope-open' style='font-size:17px'></p></td>
                                <td style="text-align: left"><p>Email: ducviet300397@gmail.com</p></td>
                            </tr>
                            <tr>
                                <td style="text-align: center"> <p class='fas fa-mobile-alt' style='font-size:17px'></p></td>
                                <td style="text-align: left"><p>Điện thoại: 0906888666</p></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
