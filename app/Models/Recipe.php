<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';

    protected $fillable = [
        'name',
        'cook_time',
        'description',
        'recipe_text',
        'price',
    ];

    protected $hidden = ['pivot'];

    public function photo()
    {
        return $this->hasMany(PhotoRecipe::class, 'recipe_id', 'id');
    }

    public function week()
    {
        return $this->belongsToMany(Week::class, 'recipes_weeks', 'recipe_id', 'week_id');
    }

    public function preferences()
    {
        return $this->belongsToMany(Preference::class, 'recipes_preferences', 'recipe_id', 'preference_id');
    }

    public function ingredients()
    {
        return $this->hasMany(
            RecipeIngredient::class,
            'recipe_id',
            'id'
        );
    }

    public function ingredientsForRecipe($id)
    {
        return $this->hasMany(
            RecipeIngredient::class,
            'recipe_id',
            'id'
        )->ingredientsWithCount($id);
    }

    public function allergens()
    {
        return $this->belongsToMany(
            Allergen::class,
            'recipes_allergens',
            'recipe_id',
            'allergen_id'
        );
    }

    public function nutritionValues()
    {
        return $this->hasMany(
            RecipeNutritionVal::class,
            'recipe_id',
            'id'
        );
    }

    public function nutritionValuesForRecipe($id)
    {
        return $this->hasMany(
            RecipeNutritionVal::class,
            'recipe_id',
            'id'
        )->nutritionValWithCount($id);
    }
}
