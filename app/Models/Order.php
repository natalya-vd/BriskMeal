<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function orderStatuses()
    {
        return $this->belongsTo(
            OrderStatus::class,
            'order_status_id',
            'id');
    }

    public function preferences()
    {
        return $this->belongsToMany(
            Preference::class,
            'orders_preferences',
            'order_id',
            'preference_id');
    }

    public function recipes()
    {
        return $this->belongsToMany(
            Recipe::class,
            'orders_recipes',
            'order_id',
            'recipe_id');
    }
}
