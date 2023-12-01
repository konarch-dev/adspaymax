<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'sale_price',
        'discount',
        'image',
        'detail',
        'code',
        'valid_till',
        'status',
        'user_id',
        'location',
        'mile1',
        'zip1',
        'mile2',
        'zip2',
        'mile3',
        'zip3',
        'category'

    ];

    protected $casts = [
        'valid_till' => 'datetime',
    ];

  
}
