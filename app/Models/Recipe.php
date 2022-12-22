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
        'main_photo_id'
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
}
