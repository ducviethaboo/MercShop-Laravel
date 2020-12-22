@extends('core.master')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            min-height: 100vh;
            background: white;
        }

        .social-link {
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            border-radius: 50%;
            transition: all 0.3s;
            font-size: 0.9rem;
        }
    </style>
    <div class="container py-5">
        <div class="row pb-5 mb-4">
            @if(session()->has('not-found'))
                <p style="color: red">{{session()->get('not-found')}}</p>
            @endif
            @foreach($products as $product)
                <div style="text-align: center" class="col-lg-3 col-md-6 mb-4 mb-lg-0 mt-5">
                    <!-- Card-->
                    <div class="card rounded shadow-sm border-0">
                        <div style="height: 300px !important;box-shadow: 5px 10px 18px lightgrey" class="card-body p-4">
                            <img style="height: 110px !important"
                                 src='{{asset("$product->productImg")}}' alt=""
                                 class="img-fluid d-block mx-auto mb-3">
                            <a href="{{route('user.showByid', $product->id)}}"
                               class="text-dark btn ">Mercedes-Benz <br>
                                <p style="font-size: 15px; font-family: 'Open Sans', sans-serif">{{$product->productName}}</p>
                            </a>
                            <p class="small text-muted font-italic">{{$product->productType}}</p>
                            <a class="btn" style="color: #005cbf" href="{{route('user.showByid', $product->id)}}">Xem
                                chi tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if(count($products) > 1)
            <div style="text-align: center">
                <p>{{ $products->links() }}</p>
            </div>
        @endif
    </div>
@endsection
