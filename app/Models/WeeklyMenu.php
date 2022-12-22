<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeeklyMenu extends Model
{
    protected $table = 'weekly_menu';

    protected $fillable = [
        'recipe_id',
        'weekly'
    ];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class, 'recipe_id', 'id');
    }
}
