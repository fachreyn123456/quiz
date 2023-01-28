<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $connection = 'mysql';
    protected $fillable = [
        'name_product','quantity','price','created_at','updated_at'
    ];
}