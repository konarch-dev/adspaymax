<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paypal extends Model
{
    use HasFactory;

   
     protected $fillable = [
        'user_id','plan','amount','currency','date_start','date_end','created_at','updated_at'
    ];
}
