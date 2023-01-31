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

    public function weeks()
    {
        return $this->belongsToMany(
            Week::class,
            'recipes_carts',
            'cart_id',
            'week_id'
        );
    }

    public function getAllRecipes($recipes)
    {
        $recipesAttributes = [];

        foreach ($recipes as $key => $value) {
            $recipesAttributes[$key]['recipes'] = $value->getAttributes();
            $recipesAttributes[$key]['quantity'] = $value->pivot->quantity;
        }

        $data = [
            'recipes' => $recipesAttributes
        ];

        return $data;
    }

    /**
     * Увеличивает кол-во товара в корзине на величину $count
     */
    public function increase($recipe_id, $week_id, $count = 1)
    {
        $this->change($recipe_id, $week_id, $count);
    }

    /**
     * Уменьшает кол-во товара в корзине на величину $count
     */
    public function decrease($recipe_id, $week_id, $count = 1)
    {
        $this->change($recipe_id, $week_id, -1 * $count);
    }

    /**
     * Добавляет/именяет количество товара $recipe_id в корзине на величину $count
     */
    private function change($recipe_id, $week_id, $count = 0)
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
                $pivotRow->update(['quantity' => $quantity, 'week_id' => $week_id]);
            } else {
                // кол-во равно нулю — удаляем товар из корзины
                $pivotRow->delete();
            }

        } elseif ($count > 0) { // иначе — добавляем этот товар
            $this->recipes()->attach($recipe_id, ['quantity' => $count, 'week_id' => $week_id]);
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
