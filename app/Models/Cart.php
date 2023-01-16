<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';

    use HasFactory;

    public function recipes()
    {
        return $this->belongsToMany(
            Recipe::class,
            'recipes_carts',
            'cart_id',
            'recipe_id'
        )->withPivot('quantity');
    }

    /**
     * Увеличивает кол-во товара в корзине на величину $count
     */
    public function increase($recipe_id, $count = 1)
    {
        $this->change($recipe_id, $count);
    }

    /**
     * Уменьшает кол-во товара в корзине на величину $count
     */
    public function decrease($id, $count = 1)
    {
        $this->change($id, -1 * $count);
    }

    /**
     * Добавляет/именяет количество товара $recipe_id в корзине на величину $count
     */
    private function change($recipe_id, $count = 0)
    {
        if ($count == 0) {
            return;
        }
        // если товар есть в корзине — изменяем кол-во
        if ($this->recipes->contains($recipe_id)) {

            // получаем объект строки таблицы `carts_recipes`
            $pivotRow = $this->recipes()->where('recipe_id', $recipe_id)->first()->pivot;
            $quantity = $pivotRow->quantity + $count;

            if ($quantity > 0) {
                // обновляем количество товара $recipe_id в корзине
                $pivotRow->update(['quantity' => $quantity]);
            } else {
                // кол-во равно нулю — удаляем товар из корзины
                $pivotRow->delete();
            }

        } elseif ($count > 0) { // иначе — добавляем этот товар
            $this->recipes()->attach($recipe_id, ['quantity' => $count]);
        }

        // обновляем поле `updated_at` таблицы `carts`
        $this->touch();
    }

    public function remove($id)
    {
        // удаляем соответствующую запись из промежуточной таблицы
        $this->recipes()->detach($id);
        // обновляем поле `updated_at` таблицы `carts`
        $this->touch();
    }
}
