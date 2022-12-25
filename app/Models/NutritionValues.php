<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionValues extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function recipes()
    {
        return $this->belongsToMany(
            Recipe::class,
            'recipes_nutrition_val',
            'nutrition_val_id',
            'recipe_id');
    }

    public function units()
    {
        return $this->belongsToMany(
            Unit::class,
            'units_nutrition_val',
            'nutrition_val_id',
            'unit_id');
    }
}
