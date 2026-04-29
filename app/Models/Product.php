<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'gambar',
        'tajuk',
        'keterangan',
        'harga',
        'stok',
    ];
}
