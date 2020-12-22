<?php

namespace App\Http\Controllers;

use App\Models\OrderDetails;
use App\Models\Orders;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckOutController extends Controller
{
    //
    public function checkOut(Request $request)
    {

//        addToOrder
        $email = $request->session()->get('login');
        $order = new Orders();
        $order->userEmail = $email[0][1];
        $order->orderDate = Carbon::now()->day . '/' . Carbon::now()->month . '/' . Carbon::now()->year;
        $order->save();

        //addToOrderDetail
        $cart = $request->session()->get('cart');
        foreach ($cart->items as $key=>$value) {
        $orderId = DB::table('orders')->where('userEmail', '=', $order->userEmail )->get();
        $orderDetails = new OrderDetails();
        $orderDetails->orderId =  $orderId[0]->id;
        $orderDetails->totalPrice = $cart->totalPrice;
        $orderDetails->priceEach = $value['item']->productPrice;
        $orderDetails->productId = $value['item']->id;
        $orderDetails->quantityOrder = $value['qty'];
        $orderDetails->save();
        }
        $alert = 'Cảm ơn quý khách, thông tin về đơn hàng sẽ được gửi về Email của quý khách. Xin cảm ơn!!';
        return redirect()->route('cart.index')->with('alert', $alert);
    }
}
