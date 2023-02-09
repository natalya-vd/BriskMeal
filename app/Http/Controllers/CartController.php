<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Queries\UserQueryBuilder;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private $cart;

    private function getCart(Request $request)
    {
        $user_id = $request->user()->id;
        $week_id = $request->week_id;

        $this->cart = Cart::where('is_ordered', false)
            ->where('user_id', $user_id)
            ->where('week_id', $week_id)
            ->first();

        if (is_null($this->cart)) {
            $this->cart = Cart::create([
                'user_id' => $request->user()->id,
                'week_id' => $request->week_id,
                'is_ordered' => 0,
            ]);
        }
    }

    public function index(
        User $user,
        Cart $cart,
        UserQueryBuilder $builder_user,
        Request $request
    ) {
        $notOrderedCarts = $user->getNotOrderedCarts();

        if (!is_null($notOrderedCarts)) {
            $data = [
                'plan_user' => $builder_user->getPlanUser($request->user()),
                'carts' => $cart->getCartContent($notOrderedCarts),
            ];

            return view('cart')->with('data', json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        } else {
            abort(404);
        }
    }

    public function add(Request $request)
    {
        $this->getCart($request);
        $quantity = $request->input('quantity') ?? 1;
        $this->cart->increase($request->id, $this->cart->id, $quantity);

        return response()->json("Ok");
    }
}
