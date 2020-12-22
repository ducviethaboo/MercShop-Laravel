<?php


namespace App\Service;


use App\Repository\OrderRepo;

class OrderService
{
    protected $orderService;

    public function __construct(OrderRepo $orderRepo)
    {
        $this->orderService = $orderRepo;
    }

    public function getAllOrderService()
    {
         return $this->orderService->getAllOrder();
    }

}
