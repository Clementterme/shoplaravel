<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'stock',
        'active',
        'category_id',
        'image',
    ];

    protected $hidden = [];

    protected $casts = [
        'price' => 'decimal:2',
        'active' => 'boolean',
    ];
}
