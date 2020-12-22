@extends('admin.core.master')
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Danh sách đơn hàng
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table style="text-align: center" class="table table-bordered" id="dataTable" width="100%"
                       cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã số đơn hàng</th>
                        <th>Tên khách hàng</th>
                        <th>Email</th>
                        <th>Xe đăng ký mua</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền hoá đơn</th>
                        <th>Ngày đặt mua</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $key=>$order)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>OD - {{$order->orderId}}</td>
                            <td>{{$order->name}}</td>
                            <td>{{$order->userEmail}}</td>
                            <td>Mercedes-Benz  {{$order->productName}}</td>
                            <td>{{number_format($order->priceEach, 0, '.', ',') . '₫'}}</td>
                            <td>{{$order->quantityOrder}}</td>
                            <td>{{number_format($order->totalPrice, 0, '.', ',') . '₫'}}</td>
                            <td>{{$order->orderDate}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
