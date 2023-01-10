<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';

    use HasFactory;

    public function recipes()
    {
        return $this->belongsToMany(
            Recipe::class,
            'recipes_carts',
            'cart_id',
            'recipe_id'
        )->withPivot('quantity');
    }
}
