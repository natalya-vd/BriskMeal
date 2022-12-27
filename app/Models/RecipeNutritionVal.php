<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class RecipeNutritionVal extends Model
{
    protected $table = 'recipes_nutrition_val';

    protected $fillable = [
        'recipe_id',
        'nutrition_val_id',
        'count',
    ];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class, 'recipe_id', 'id');
    }

    public function nutritionVal()
    {
        return $this->belongsTo(NutritionValues::class, 'nutrition_val_id', 'id');
    }

    public function scopeNutritionValWithCount(Builder $query, $recipe_id, $columns = ['nutrition_values.name as nutrition_values', 'count', 'units.name as unit']): Builder
    {
        return $query->join('nutrition_values', 'nutrition_val_id', '=', 'nutrition_values.id')
            ->join('units', 'unit_id', '=', 'units.id')
            ->select($columns)
            ->where('recipe_id', $recipe_id);
    }
}
