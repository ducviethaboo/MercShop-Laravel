<?php


namespace App\Repository;


use Illuminate\Support\Facades\DB;

class OrderRepo
{
    public function getAllOrder()
    {
        return DB::table('users')
            ->join('orders', 'orders.userEmail', '=', 'users.email')
            ->join('orderdetails', 'orderdetails.orderId', '=', 'orders.id')
            ->join('products', 'products.id', '=', 'orderdetails.productId')
            ->select('users.name','orders.orderDate', 'orderdetails.orderId', 'orders.userEmail', 'orderdetails.quantityOrder', 'orderdetails.totalPrice','orderdetails.priceEach', 'products.productName')
            ->get();
    }
}
