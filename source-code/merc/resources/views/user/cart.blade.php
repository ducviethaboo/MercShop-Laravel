@extends('core.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body {
            margin-top: 20px;
            background: #eee;
        }

        h3 {
            font-size: 16px;
        }

        .text-navy {
            color: #1ab394;
        }

        .cart-product-imitation {
            text-align: center;
            padding-top: 30px;
            height: 80px;
            width: 80px;
            background-color: #f8f8f9;
        }

        .product-imitation.xl {
            padding: 120px 0;
        }

        .product-desc {
            padding: 20px;
            position: relative;
        }

        .ecommerce .tag-list {
            padding: 0;
        }

        .ecommerce .fa-star {
            color: #d1dade;
        }

        .ecommerce .fa-star.active {
            color: #f8ac59;
        }

        .ecommerce .note-editor {
            border: 1px solid #e7eaec;
        }

        table.shoping-cart-table {
            margin-bottom: 0;
        }

        table.shoping-cart-table tr td {
            border: none;
            text-align: right;
        }

        table.shoping-cart-table tr td.desc,
        table.shoping-cart-table tr td:first-child {
            text-align: left;
        }

        table.shoping-cart-table tr td:last-child {
            width: 80px;
        }

        .ibox {
            clear: both;
            margin-bottom: 25px;
            margin-top: 0;
            padding: 0;
        }

        .ibox.collapsed .ibox-content {
            display: none;
        }

        .ibox:after,
        .ibox:before {
            display: table;
        }

        .ibox-title {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            background-color: #ffffff;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 3px 0 0;
            color: inherit;
            margin-bottom: 0;
            padding: 14px 15px 7px;
            min-height: 48px;
        }

        .ibox-content {
            background-color: #ffffff;
            color: inherit;
            padding: 15px 20px 20px 20px;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 1px 0;
        }

        .ibox-footer {
            color: inherit;
            border-top: 1px solid #e7eaec;
            font-size: 90%;
            background: #ffffff;
            padding: 10px 15px;
        }

        th {
            text-align: left !important;
        }
    </style>
    <div>
        @if (session()->has('success'))
            <div class="col-12 alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ session()->get('success') }}</strong>
            </div>

        @endif
        @if (session()->has('delete_error'))
            <div class="col-12 alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ session()->get('delete_error') }}</strong>
            </div>
        @endif
        <div class="container">
            <br>
            <br>
            @if(session()->has('alert'))
                <section class='alert alert-success'>{{session()->get('alert')}}</section>
            @endif
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-md-8">
                        <div class="ibox">
                            <div class="ibox-title">
                                @if($cart->totalQty != null)
                                    <span class="pull-right">(<strong>{{$cart->totalQty}}</strong>) Sản phẩm</span>
                                @else
                                    <span class="pull-right">(<strong>0</strong>) Sản phẩm</span>
                                @endif
                                <h3><b>Sản phẩm trong giỏ hàng</b></h3>
                            </div>
                            <div style="box-shadow: 5px 10px 18px lightgrey" class="ibox-content">
                                <div class="table-responsive">
                                    <table class="table shoping-cart-table">
                                        <th style="text-align: center !important;">Ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th style="text-align: center !important;">Giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                        <tbody>
                                        @if(session()->has('cart') && $cart->totalQty > 0)
                                            @foreach($cart->items as $product)
                                                <tr>
                                                    <td style="width: 200px">
                                                        <div>
                                                            <img style="width: 100%"
                                                                 src='{{asset($product['item']->productImg)}}' alt="">
                                                        </div>
                                                    </td>
                                                    <td class="desc">
                                                        <h3>
                                                            <a href="{{route('user.showByid',$product['item']->id )}}"
                                                               class="text-navy">
                                                                Mercedes-Benz {{$product['item']->productName}}
                                                            </a>
                                                        </h3>
                                                        <dl class="small m-b-none">
                                                            <dt>Mô tả</dt>
                                                            <dd>Màu: {{$product['item']->productColor}}</dd>
                                                            <dd>Loại: {{$product['item']->productType}}</dd>
                                                        </dl>
                                                        <div class="m-t-sm">
                                                            <a style="color: red"
                                                               href="{{ route('cart.removeProductIntoCart', $product['item']->id) }}
                                                                   " class="text-muted"><i class="fa fa-trash"></i>
                                                                Xoá sản phẩm</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{number_format($product['item']->productPrice, 0, '.', ',') . '₫'}}
                                                    </td>
                                                    <td width="65">
                                                        <input type="text" class="form-control"
                                                               value="{{$product['qty']}}">
                                                    </td>
                                                    <td>
                                                        {{number_format($product['price'], 0, '.', ',') . '₫'}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        @else
                                            <p style="color: red">{{ "Bạn chưa mua sản phẩm nào" }}
                                        @endif
                                    </table>
                                </div>
                            </div>
                            <div style="box-shadow: 5px 10px 18px lightgrey" class="ibox-content">
                                <button class="btn btn-white"><i class="fa fa-arrow-left"></i> <a style="color: black"
                                                                                                  class="btn"
                                                                                                  href="{{route('user.show')}}">Tiếp
                                        tục mua hàng</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h3><b>Thanh toán</b></h3>
                            </div>
                            <div style="box-shadow: 5px 10px 18px lightgrey" class="ibox-content">
                    <span>
                        Tổng tiền:
                    </span>
                                <h2 class="font-bold">
                                    {{number_format($cart->totalPrice, 0 , '.', ','). '₫'}}
                                </h2>

                                <hr>
                                <div class="m-t-sm">
                                    <div class="btn-group">
                                        <a id="checkOut" href="{{route('user.checkout')}}"
                                           onclick="alert('Thông tin mua hàng đã được được xác nhận')"
                                           class="btn btn-success btn-sm"><i class="fa fa-shopping-cart"></i>
                                            Checkout</a>
                                        <a href="{{route('home')}}" class="btn btn-white btn-sm"> Quay lại</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ibox">
                            <div style="text-align: center;box-shadow: 5px 10px 18px lightgrey" class="ibox-title">
                                <h3><b>Việt Hà Auto</b></h3>
                            </div>
                            <div class="ibox-content text-center">
                                <span class="small">
                                       <table>
                        <tr>
                            <td style="text-align: center; width: 30px" height=30px"><p class='fas fa-map-marker-alt'
                                                                                        style='font-size:17px; color: black'></p></td>
                            <td style="text-align: left"><p
                                    style="color: black">Địa chỉ: 89 Bồ Đề, Long Biên, Hà Nội</p></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; height: 30px"><p class='fas fa-envelope-open'
                                                                            style='font-size:17px; color: black'></p></td>
                            <td style="text-align: left"><p style="color: black">Email: ducviet300397@gmail.com</p></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; height: 30px"> <p class='fas fa-mobile-alt'
                                                                             style='font-size:17px; color: black'></p></td>
                            <td style="text-align: left"><p style="color: black">Điện thoại: 0906888666</p></td>
                        </tr>
                    </table>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
