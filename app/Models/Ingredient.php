<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recipe;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function recipes()
    {
        return $this->belongsToMany(
            Recipe::class,
            'recipes_ingredients',
            'ingredient_id',
            'recipe_id');
    }

    public function units()
    {
        return $this->belongsToMany(
            Unit::class,
            'units_ingredients',
            'ingredient_id',
            'unit_id');
    }
}
