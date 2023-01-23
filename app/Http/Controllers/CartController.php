<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    private $cart;

    public function __construct()
    {
        $this->getCart();
    }

    private function getCart()
    {
        $cart_id = \request()->cookie('cart_id');
        //$cart_id = 1; // Для ручного изменения cart_id

        if (is_null($cart_id)) { /* TODO Возможно, позже нужно будет сменить проверку на empty() */
            // если корзина еще не существует — создаем объект
            $this->cart = Cart::create();

        } else {
            try {
                $this->cart = Cart::findOrFail($cart_id);
            } catch (ModelNotFoundException $e) {
                $this->cart = Cart::create();
            }
        }

        // Самостоятельно помещаем в куки ключ `cart_id` со значением из $this->cart->id
        Cookie::queue('cart_id', $this->cart->id, 2880);
    }

    public function index()
    {
        $recipes = $this->cart->recipes;
        //dd($recipes);

        if (!is_null($recipes)) {
            //return view('cart-test', compact('recipes'));
            return view('cart', compact('recipes'))
                ->with('data', json_encode($recipes, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        } else {
            abort(404);
        }
    }

    public function add(Request $request)
    {
        //dd($request->id);
        $quantity = $request->input('quantity') ?? 1;
        $this->cart->increase($request->id, $quantity);

        // выполняем редирект обратно на ту страницу,
        // где была нажата кнопка «В корзину»

        return response()->json("Ok");
        //return back();
    }

    /**
     * Увеличивает кол-во товара в корзине на единицу
     */
    public function plus(Recipe $recipe)
    {
        $this->cart->increase($recipe->id);
        return redirect()->route('cart-test');
    }

    /**
     * Уменьшает кол-во товара в корзине на единицу
     */
    public function minus(Recipe $recipe)
    {
        $this->cart->decrease($recipe->id);
        return redirect()->route('cart-test');
    }

    public function checkout() // Оформление заказа
    {
        //
    }

    public function remove(Recipe $recipe, Request $request)
    {
        //dd($recipe);
        $this->cart->remove($recipe->id);
        //$this->cart->remove($recipe->id);
        return response()->json("Ok");
        //return redirect()->route('cart-test');
    }
}
