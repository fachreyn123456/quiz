<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $connection = 'mysql';
    protected $fillable = [
        'user','product','total','status','created_at','updated_at'
    ];
}