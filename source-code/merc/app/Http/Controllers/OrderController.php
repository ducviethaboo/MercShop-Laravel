<?php

namespace App\Http\Controllers;

use App\Service\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    protected $orderController;
    public function __construct(OrderService $orderService)
    {
        $this->orderController = $orderService;
    }

    public function getAllOrderByAdmin()
    {
        $orders = $this->orderController->getAllOrderService();
        return view('admin.orders-list', compact('orders'));
    }
}
