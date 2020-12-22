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
        background: scroll center url('https://i.pinimg.com/564x/06/2f/58/062f581c0f9f016fcb937cf5a7ab1d68.jpg');
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
</style>
<body>
<div class="container">
    <div class="row">
        <div  class="col-lg-10 col-xl-9 mx-auto mt-auto">
            <div style="box-shadow: 5px 10px 18px grey"  class="card card-signin flex-row my-5">
                <div class="card-img-left d-none d-md-flex">
                    <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Đăng nhập</h5>
                    <form action="{{route('login.check')}}" method="post" name="login" id="login-form">
                        @csrf
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required>
                            <label for="inputEmail">Email</label>
                        </div>
                        <hr>
                        <div class="form-label-group">
                            <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Mật khẩu" name="password" required>
                            <label for="inputConfirmPassword">Mật khẩu</label>
                        </div>
                        @if (session()->has('login-fail'))
                            <div class="login-fail">
                                <p class="text-danger">{{ session()->get('login-fail')}}</p>
                            </div>
                        @endif
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng nhập</button>
                        <a class="d-block text-center mt-2 small" href="{{route('user.register')}}">Đăng ký tài khoản</a>
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

