<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zip extends Model
{
    
    use  HasFactory;
    protected $fillable = [
        'zip',
        'primary_city',
        'latitude',
        'longitude',
        'state',
        'country'
    ];
}
