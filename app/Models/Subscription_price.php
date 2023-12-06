<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription_price extends Model
{
    use HasFactory;

    protected $table = 'subscription_prices';
    protected $fillable = ['months' , 'price' , 'months_num' , 'details_1' , 'details_2' , 'details_3' ];
}
