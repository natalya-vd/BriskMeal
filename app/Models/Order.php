<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        "cart_id",
        "status_id",
        "first_name",
        "last_name",
        "phone",
        "address",
        "address_line_2",
        "city",
        "region",
        "zip_code",
        "delivery_day",
        "delivery_instructions",
        "promotions",
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cart_id', 'id');
    }

    public function orderStatuses()
    {
        return $this->belongsTo(
            OrderStatus::class,
            'status_id',
            'id'
        );
    }
}
