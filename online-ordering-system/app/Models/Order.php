<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'items',
        'total_amount',
        'status',
    ];

    protected $casts = [
        'items' => 'array',
    ];
}
