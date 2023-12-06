<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;


class Subscription extends Model
{
    use HasFactory;

    protected $table = 'subscriptions';
    protected $fillable = [ 'user_id' , 'start_in' , 'end_in' , 'price' ];

    public function user()
    {
        return $this->belongsTo(Users::class , 'user_id');
    }
}
