<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $connection = 'mysql';
    protected $fillable = [
        'nama_layanan','jenis_layanan','created_at','updated_at'
    ];
}
