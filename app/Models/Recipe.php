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

    public function photo()
    {
        return $this->hasMany(PhotoRecipe::class, 'recipe_id', 'id');
    }

    // TODO: Здесь возможно по-другому будет...
    public function weekly()
    {
        return $this->hasMany(WeeklyMenu::class, 'recipe_id', 'id');
    }

    public function preferences()
    {
        return $this->belongsToMany(Preference::class, 'recipes_preferences', 'recipe_id', 'preference_id');
    }

    public function ingredients($id)
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
        return $this->belongsToMany(
            NutritionValues::class,
            'recipes_nutrition_val',
            'recipe_id',
            'nutrition_val_id'
        );
    }
}
