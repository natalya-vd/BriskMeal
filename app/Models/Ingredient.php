<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredients';

    protected $fillable = [
        'name',
        'unit_id'
    ];

    protected $hidden = ['pivot'];

    public function recipeIngredient()
    {
        return $this->hasMany(
            RecipeIngredient::class,
            'ingredient_id',
            'id',
        );
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }
}
