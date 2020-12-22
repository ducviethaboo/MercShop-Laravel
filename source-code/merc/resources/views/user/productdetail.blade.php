@extends('core.master')
@section('content')
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css'/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function () {
                $(".dropdown dd ul").toggle();
            });

            $(".dropdown dd ul li a").click(function () {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });

            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function (e) {
                var $clicked = $(e.target);
                if (!$clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function () {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
    <!----details-product-slider--->
    <!-- Include the Etalage files -->
    <link rel="stylesheet" href="{{asset('css/etalage.css')}}">
    <script src="{{asset('js/jquery.etalage.min.js')}}"></script>
    <!-- Include the Etalage files -->
    <script>
        jQuery(document).ready(function ($) {

            $('#etalage').etalage({
                thumb_image_width: 300,
                thumb_image_height: 400,

                show_hint: true,
                click_callback: function (image_anchor, instance_id) {
                    alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                }
            });
            // This is for the dropdown list example:
            $('.dropdownlist').change(function () {
                etalage_show($(this).find('option:selected').attr('class'));
            });

        });
    </script>
    <!----//details-product-slider--->
    <div class="main">
        <div class="shop_top">
            <div class="container">
                <div class="row">
                    <img style="width: 100%" src='{{asset("$product->productImg")}}'>
                </div>
                <!-- end product_slider -->
                <div>
                    <h2>Mercedes-Benz {{$product->productName}}</h2>
                    <p class="price2">
                        {{ number_format($product->productPrice, 0, '.', ',')  . '₫'}}</p>
                    <div>
                        <h2>Chi tiết:</h2>
                        <table style="text-align: left">
                            <tr>
                                <td>
                                    <b>Màu sắc:</b>
                                </td>
                                <td>
                                    <p class="m_20">
                                        {{$product->productColor}}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Loại xe:</b>
                                </td>
                                <td>
                                    <p class="m_20">
                                        {{$product->productType}}
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <br>
                    <br>
                    <h2> Thông tin sản phẩm: </h2>
                    <p class="m_10">{{$product->productDesc}}</p>
                    <div class="btn_form">
                        @if(session()->has('login'))
                            <a class="add-to-cart" onclick="alert('Thêm sản phẩm vào giỏ hàng thành công')"
                               href="{{ route('cart.addToCart', $product->id) }}">+ Thêm vào giỏ hàng</a>
                        @else
                            <a class="add-to-cart"
                               href="{{ route('cart.addToCart', $product->id) }}">+ Thêm vào giỏ hàng</a>
                        @endif
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
