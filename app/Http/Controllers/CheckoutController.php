<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Events\CheckoutEvent;
use CodeCommerce\Http\Requests;
use CodeCommerce\Order;
use CodeCommerce\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PHPSC\PagSeguro\Items\Item;
use PHPSC\PagSeguro\Purchases\Transactions\Locator;
use PHPSC\PagSeguro\Requests\Checkout\CheckoutService;
use PHPSC\PagSeguro\Requests\PreApprovals\Request;

class CheckoutController extends Controller
{
    public function place(Order $orderModel, OrderItem $orderItem)
    {
        if(!Session::has('cart')){
            return false;
        }

        $cart = Session::get('cart');

        if($cart->getTotal() > 0){

            $order = $orderModel->create(['user_id' => 1, 'total' => $cart->getTotal()]);

            foreach($cart->all() as $k => $item){

                $order->items()->create(['product_id' => $k, 'price' => $item['price'], 'qtd' => $item['qtd']]);
            }

            dd($order->items);
        }
    }
}
