<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div style="margin-left: -120px" class="col-md-11">
                <div class="header-left">
                    <div class="logo ">
                        <a href="{{route('home')}}"><img
                                src="https://www.mercedes-benz.com.vn/vi/passengercars/_jcr_content/logo.noscale.cloudsvg.imageLogo.20180312094632.svg"
                                alt=""/></a>
                    </div>
                    <div class="menu">
                        <ul class="nav" id="nav">
                            <li><a style="font-size: 15px" href="{{route('home')}}">Trang chủ</a></li>
                            <li><a style="font-size: 15px" href="{{route('user.show')}}">Cửa hàng xe</a></li>
                            <li><a style="font-size: 15px" href="{{route('user.testDriveRegister')}}">Đăng ký lái thử</a></li>
                        </ul>
                        <div class="header-left" style="text-align: right; position: absolute">
                        </div>
                        <script type="text/javascript" src="{{asset('js/responsive-nav.js')}}"></script>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="header_right">
                    <div class="search-box">
                        <div id="sb-search" class="sb-search">
                            <form method="post" action="{{route('user.search')}}">
                                @csrf
                                <input class="sb-search-input" placeholder="Nhập thứ bạn muốn tìm kiếm..." type="search"
                                       name="search" id="search">
                                <input class="sb-search-submit" type="submit">
                                <span class="sb-icon-search"> </span>
                            </form>
                        </div>
                    </div>
                    <script src="{{asset('js/classie.js')}}"></script>
                    <script src="{{asset('js/uisearch.js')}}"></script>
                    <script>
                        new UISearch(document.getElementById('sb-search'));
                    </script>
                </div>
            </div>
            <div style="margin-top: 5px; margin-left: 1150px">
                <table style="text-align: center">
                    <tr>
                        <td>
                            <div>
                                @if(session()->has('login'))
                                    <p style="color: white; font-size: 12px"><a
                                            href="{{route('user.account.detail')}}">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                                    </p>
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button style="font-size: 12px" class="btn btn-link" type="submit">Đăng xuất
                                        </button>
                                    </form>
                                @else
                                    <a style="color: white" href="{{route('login')}}">
                                        <i style="font-size: 20px" class="fa fa-user" aria-hidden="true"></i>
                                    </a>
                                @endif
                            </div>
                        </td>
                        <td>
            <span class="navbar-text">
                    <a href="{{route('cart.index')}}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i><span
                            class="badge badge-secondary">{{ (session()->has('cart')) ? session()->get('cart')->totalQty : null }}</span></a>
            </span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
