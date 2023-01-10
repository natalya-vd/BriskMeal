<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart_id = $request->cookie('cart_id');

        if (!empty($cart_id)) {

            $recipes = Cart::findOrFail($cart_id)->recipes;
            return view('cart-test')->with('recipes', $recipes);

        } else { /* TODO Как вариант, пустую корзину можно обработать на стороне шаблона */
            abort(404);
        }
    }

    public function checkout() // Оформление заказа
    {
        //
    }

    public function add(Request $request, Recipe $recipe)
    {
        $cart_id = $request->cookie('cart_id');
        $quantity = $request->input('quantity') ?? 1;

        if (is_null($cart_id)) { /* TODO Возможно, позже нужно будет сменить проверку на empty() */
            // если корзина еще не существует — создаем объект
            $cart = Cart::create();
            // получаем идентификатор, чтобы записать в cookie
            $cart_id = $cart->id;

        } else {
            // получаем объект корзины
            $cart = Cart::findOrFail($cart_id);
            // обновляем поле `updated_at`
            $cart->touch();

        }


        if ($cart->recipes->contains($recipe)) {
            // если такой товар есть в корзине — изменяем кол-во
            $pivotRow = $cart->recipes()->where('recipe_id', $recipe->id)->first()->pivot;
            $quantity = $pivotRow->quantity + $quantity;
            $pivotRow->update(['quantity' => $quantity]);

            // обновляем значение quantity в pivot в промежуточной таблице
            $cart->recipes()->updateExistingPivot(
                $recipe->id,
                ['quantity' => $quantity]
            );

        } else {
            // если такого товара нет в корзине — добавляем его
            $cart->recipes()->attach($recipe->id, ['quantity' => $quantity]);
        }

        return back()->withCookie(cookie('cart_id', $cart_id, 2880));
    }

    public function delete(Request $request, Recipe $recipe)
    {
        $cart_id = $request->cookie('cart_id');
        $cart = Cart::findOrFail($cart_id);

        // удаляем товар из корзины (разрушаем связь)
        $cart->recipes()->detach($recipe->id);
        // обновляем поле `updated_at`
        $cart->touch();

        return redirect()->route('cart-test');
    }
}
