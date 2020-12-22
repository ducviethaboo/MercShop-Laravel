<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Document</title>
</head>
<body>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <table>
                    <h2 style="color: white; font-size:50px">Việt Hà Auto</h2>
                    <br>
                    <tr>
                        <td style="text-align: center; width: 30px; height: 30px"><p class='fas fa-map-marker-alt'
                                                                                      style='font-size:17px; color: white'></p>
                        </td>
                        <td style="text-align: left"><p style="color: white;font-size: 20px">Địa chỉ: 89 Bồ Đề, Long Biên, Hà Nội</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center; height: 30px"><p class='fas fa-envelope-open'
                                                                        style='font-size:17px; color: white'></p></td>
                        <td style="text-align: left"><p style="color: white;font-size: 20px">Email: ducviet300397@gmail.com</p></td>
                    </tr>
                    <tr>
                        <td style="text-align: center; height: 30px"><p class='fas fa-mobile-alt'
                                                                        style='font-size:17px; color: white'></p></td>
                        <td style="text-align: left"><p style="color: white;font-size: 20px">Điện thoại: 0906888666</p></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-2">
                <ul class="footer_box">
                    <div class="footer_search">
                        <div class="logo ">
                            <a href="{{route('home')}}"><img
                                    src="{{asset('/images/home-page/merc.png')}}"
                                    style="width: 150px"/></a>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="col-md-2">
                <ul class="footer_box">
                    <div class="footer_search">
                        <div class="logo ">
                            <a href="{{route('home')}}"><img
                                    src="{{asset('/images/home-page/amg.png')}}"
                                    style="width: 200px"/></a>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="col-md-1">
                <ul class="footer_box">
                    <div class="footer_search">
                        <div class="logo ">
                            <a href="{{route('home')}}"><img
                                    src="{{asset('/images/home-page/maybach-logo.png')}}"
                                    style="width: 230px"/></a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        <div class="row footer_bottom">
            <div class="copy">
                @if(session()->has('login'))
                    <p>Đăng nhập bởi: <a style="color: #00AAF0" href="https://www.facebook.com/ducviet1997/" target="_blank">{{\Illuminate\Support\Facades\Auth::user()->name}}</a></p>
                @endif

            </div>
        </div>
    </div>
</div>
</body>
</html>
