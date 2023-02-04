<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    protected $table = 'weeks';

    protected $fillable = [
        'year',
        'week',
        'week_name',
        'first_week_day',
        'last_week_day',
        'active_week',
        'price_recipe'
    ];

    protected $hidden = ['pivot'];

    public function recipe()
    {
        return $this->belongsToMany(Recipe::class, 'recipes_weeks', 'week_id', 'recipe_id');
    }

    public function carts()
    {
        return $this->hasMany(
            Cart::class,
            'week_id',
            'id'
        );
    }
}
