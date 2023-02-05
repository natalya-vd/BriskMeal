<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';

    protected $fillable = [
        'user_id',
        'week_id',
        'is_ordered',
    ];

    public function recipes()
    {
        return $this->belongsToMany(
            Recipe::class,
            'recipes_carts',
            'cart_id',
            'recipe_id'
        )->withPivot('quantity');
    }

    public function weeks()
    {
        return $this->belongsTo(
            Week::class,
            'week_id',
            'id'
        );
    }

    public function order()
    {
        return $this->hasOne(Order::class, 'cart_id', 'id');
    }

    /**
     * Увеличивает кол-во товара в корзине на величину $count
     */
    public function increase($recipe_id, $cart_id, $count = 1)
    {
        $this->change($recipe_id, $cart_id, $count);
    }

    /**
     * Добавляет/именяет количество товара $recipe_id в корзине на величину $count
     */
    private function change($recipe_id, $cart_id, $count = 0)
    {
        // если товар есть в корзине — изменяем кол-во
        if ($this->recipes->contains($recipe_id)) {

            // получаем объект строки таблицы `carts_recipes`
            $pivotRow = $this->recipes()->where('recipe_id', $recipe_id)->first()->pivot;
            $quantity = $pivotRow->quantity;
            $quantity = $count;

            if ($quantity > 0) {
                // обновляем количество товара $recipe_id в корзине
                $pivotRow->update(['recipe_id' => $recipe_id, 'cart_id' => $cart_id, 'quantity' => $quantity]);
            } else {
                // кол-во равно нулю — удаляем товар из корзины
                $pivotRow->delete();
            }

        } elseif ($count > 0) { // иначе — добавляем этот товар
            $this->recipes()->attach($recipe_id, ['cart_id' => $cart_id, 'quantity' => $count]);
        }

        // обновляем поле `updated_at` таблицы `carts`
        $this->touch();
    }

    public function getCartContent($notOrderedCarts)
    {
        $carts = [];

        foreach ($notOrderedCarts as $key => $cart) {
            $carts[$key]['cart_id'] = $cart->id;
            $carts[$key]['week_attributes'] = $cart->weeks->getAttributes();

            foreach ($cart->recipes as $key1 => $value1) {
                $carts[$key]['recipes'][$key1]['recipe'] = $value1->getAttributes();
                $carts[$key]['recipes'][$key1]['quantity']= $value1->pivot->quantity;
            }
        }

        return $carts;
    }
}
