<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function ingredients()
    {
        return $this->belongsToMany(
            Ingredient::class,
            'units_ingredients',
            'unit_id',
            'ingredient_id');
    }

    public function nutritionValues()
    {
        return $this->belongsToMany(
            NutritionValues::class,
            'units_nutrition_val',
            'unit_id',
            'nutrition_val_id');
    }
}
