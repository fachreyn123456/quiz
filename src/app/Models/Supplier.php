<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $connection = 'mysql';
    protected $fillable = [
        'harga','status','created_at','updated_at'
    ];
}
