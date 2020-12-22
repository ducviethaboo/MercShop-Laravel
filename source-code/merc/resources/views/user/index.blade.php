@extends('core.master')
@section('content')
    <div class="banner">
    <!-- start slider -->
        <div id="fwslider">
            <div class="slider_container">
                <div class="slide">
                    <img src="{{asset('images/user-img/G63.jpeg')}}" class="img-responsive" alt=""/>
                </div>
                <div class="slide">
                    <img src="{{asset('images/user-img/G63-2.jpeg')}}" class="img-responsive" alt=""/>
                </div>
                <div class="slide">
                    <img src="{{asset('images/user-img/G63-3.jpeg')}}" class="img-responsive" alt=""/>
                </div>
                <div class="slide">
                    <img src="{{asset('images/user-img/coupe.jpg')}}" class="img-responsive" alt=""/>
                </div>
                <div class="slide">
                    <img src="{{asset('images/user-img/S600.jpg')}}" class="img-responsive" alt=""/>
                </div>
                <!--/slide -->
            </div>
            <div class="timers"></div>
            <div class="slidePrev"><span></span></div>
            <div class="slideNext"><span></span></div>
        </div>
        <!--/slider -->
    </div>
    <div class="content-bottom-1">
        <div class="container">
            <div class="row content_bottom-text">
                <div class="col-md-7">
                    <h3 style="color: white">Về thiết kế ngoại thất</h3>
                    <br>
                    <p class="m_2">Đầu xe chắc khỏe, hiệu quả về mặt chức năng vẫn giữ được đặc trưng của nó trong nhiều
                        thập kỷ. Một đường gân nổi thẳng tắp và bề mặt phẳng lớn tạo nên sườn xe. Đặc trưng riêng của xe
                        là bản lề cửa nằm ngoài, thanh bảo vệ bên ngoài hai bên hông và bánh xe dự phòng treo trên cửa
                        hậu. Lớp lót vành bánh xe nổi bật và vệt bánh xe rộng mang đến một vẻ ngoài đầy uy lực.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="content-bottom-2">
        <div class="container">
            <div class="row content_bottom-text">
                <div class="col-md-7">
                    <h3 style="color: white">Về thiết kế nội thất</h3>
                    <br>
                    <p class="m_2">Nội thất được thiết kế lại hoàn toàn đạt tới một cấp độ mới. Không còn nghi ngờ gì
                        nữa, ngôn ngữ thiết kế và tỷ lệ trong nội thất mang đậm phong cách của xe G-Class: tự tin, góc
                        cạnh, mang tính biểu tượng. Như thể tự nhiên trở thành thần hộ mệnh cho nội thất rộng rãi, phóng
                        khoáng của G-Class. Ý tưởng không gian tạo ra hình mẫu cho sự rộng rãi và thoải mái của mọi
                        người ngồi trên xe G-Class.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="features">
        <div class="container">
            <h3 class="m_3">Các dòng xe nổi bật</h3>
            <div class="row">
                <div class="col-md-3 top_box">
                    <div class="view view-ninth"><a href="single.html">
                            <img src="{{asset('images/user-img/Maybach1.jpeg')}}" class="img-responsive" alt=""/>
                            <div class="mask mask-1"></div>
                            <div class="mask mask-2"></div>
                            <div class="content">
                                <h2>Maybach S-Class</h2>
                                <p>Sang trọng quý phái</p>
                            </div>
                        </a>
                        <x></x>
                    </div>
                    <h4 class="m_4"><a href="#">Sedan</a></h4>
                    <p class="m_5">Bao gồm các dòng S-Class, E-Class, C-Class và cao cấp nhất là dòng Maybach.
                    </p>
                </div>
                <div class="col-md-3 top_box">
                    <div class="view view-ninth"><a href="single.html">
                            <img style="width: 100%" src="{{asset('images/user-img/G63-8.jpeg')}}"
                                 class="img-responsive" alt=""/>
                            <div class="mask mask-1"></div>
                            <div class="mask mask-2"></div>
                            <div class="content">
                                <h2>G-Class</h2>
                                <p>Mạnh mẽ bản lĩnh</p>
                            </div>
                        </a>
                        <x></x>
                    </div>
                    <h4 class="m_4"><a href="#">SUV</a></h4>
                    <p class="m_5">Bao gồm các dòng GLA, GLB, GLC, GLE, GLS và G-Class
                    </p>
                </div>
                <div class="col-md-3 top_box">
                    <div class="view view-ninth"><a href="single.html">
                            <img src="{{asset('images/user-img/GT.jpeg')}}" class="img-responsive" alt=""/>
                            <div class="mask mask-1"></div>
                            <div class="mask mask-2"></div>
                            <div class="content">
                                <h2>GT Coupé 4 cửa</h2>
                                <p>Sự quyến rũ của tốc độ</p>
                            </div>
                        </a>
                        <x></x>
                    </div>
                    <h4 class="m_4"><a href="#">Mercedes-AMG</a></h4>
                    <p class="m_5">Bao gồm các mẫu GT Coupé, G-Class
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
