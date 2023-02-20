<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionValues extends Model
{
    protected $table = 'nutrition_values';

    protected $fillable = [
        'name',
        'unit_id'
    ];

    protected $hidden = ['pivot'];

    public function recipeNutritionValues()
    {
        return $this->hasMany(
            RecipeNutritionVal::class,
            'nutrition_val_id',
            'id',
        );
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }
}
