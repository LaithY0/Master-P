<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coachesl extends Model
{
    use HasFactory;

    protected $table = 'coachesls';
    protected $fillable = ['name' , 'position' ,'phone' ,'photo'];
}
