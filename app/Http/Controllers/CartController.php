<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Recipe;
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

        if (!is_null($recipes)) {

            $data = $this->cart->getAllRecipes($recipes);

            return view('cart')->with('data', json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
            /*return view('cart-test', compact('recipes'));*/
        } else {
            abort(404);
        }
    }

    public function add(Recipe $recipe, Request $request)
    {
        $quantity = $request->input('quantity') ?? 1;
        $this->cart->increase($request->id, $request->week_id, $quantity);

        // выполняем редирект обратно на ту страницу,
        // где была нажата кнопка «В корзину»

        return response()->json("Ok");
        //return back();
    }

    /**
     * Увеличивает кол-во товара в корзине на единицу
     */
    public function plus(Recipe $recipe, Request $request)
    {
        $this->cart->increase($request->id, $request->week_id);
        return response()->json("Ok");
        //return redirect()->route('cart-test');
    }

    /**
     * Уменьшает кол-во товара в корзине на единицу
     */
    public function minus(Recipe $recipe, Request $request)
    {
        $this->cart->decrease($request->id, $request->week_id);
        return response()->json("Ok");
        //return redirect()->route('cart-test');
    }

    public function checkout() // Оформление заказа
    {
        //
    }

    public function remove(Recipe $recipe, Request $request)
    {
        $this->cart->remove($recipe->id);
        return response()->json("Ok");
        //return redirect()->route('cart-test');
    }
}
