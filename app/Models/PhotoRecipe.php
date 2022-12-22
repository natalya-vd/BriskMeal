<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoRecipe extends Model
{
    protected $table = 'photo_recipes';

    protected $fillable = [
        'name',
        'path',
        'recipe_id'
    ];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class, 'recipe_id', 'id');
    }
}
