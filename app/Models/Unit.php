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
        return $this->hasMany(
            Ingredient::class,
            'unit_id',
            'id',
        );
    }

    public function nutritionValues()
    {
        return $this->belongsToMany(
            NutritionValues::class,
            'units_nutrition_val',
            'unit_id',
            'nutrition_val_id'
        );
    }
}
