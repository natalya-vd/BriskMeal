<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergen extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected $hidden = ['pivot'];

    public function recipes()
    {
        return $this->belongsToMany(
            Recipe::class,
            'recipes_allergens',
            'allergen_id',
            'recipe_id'
        )
            ->withTimestamps();
    }
}
