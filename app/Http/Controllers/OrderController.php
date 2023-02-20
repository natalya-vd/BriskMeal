<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Queries\UserQueryBuilder;
use App\Queries\OrderQueryBuilder;
use App\Http\Requests\StoreOrderRequest;

class OrderController extends Controller
{
    public function index(
        Request $request,
        UserQueryBuilder $builder_user,
        Cart $cart
    ) {
        $plan = $builder_user->getPlanUser($request->user());

        $dataResponse = [
            'plan' => $plan,
            'cart_id' => $cart->id,
            'week' => $cart->weeks
        ];

        return view('order')->with('data', json_encode($dataResponse, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }

    public function store(
        StoreOrderRequest $request,
        OrderQueryBuilder $builder,
        Cart $cart
    ) {
        $order = $request->validated();
        $order['total_price'] = $cart->find($order['cart_id'])->getTotalPriceCart();

        $orderOne = $builder->create($order);

        if ($orderOne) {
            return response('Ok');
        }
    }
}
