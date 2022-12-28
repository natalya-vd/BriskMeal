<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class RecipeIngredient extends Model
{
    protected $table = 'recipes_ingredients';

    protected $fillable = [
        'recipe_id',
        'ingredient_id',
        'count',
    ];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class, 'recipe_id', 'id');
    }

    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class, 'ingredient_id', 'id');
    }

    public function scopeIngredientsWithCount(Builder $query, $recipe_id, $columns = ['ingredients.name as ingredient', 'count', 'units.name as unit']): Builder
    {
        return $query->join('ingredients', 'ingredient_id', '=', 'ingredients.id')
            ->join('units', 'unit_id', '=', 'units.id')
            ->select($columns)
            ->where('recipe_id', $recipe_id);
    }
}
