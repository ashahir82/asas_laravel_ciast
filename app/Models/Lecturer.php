<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    //
    protected $fillable = [
        'name',
        'no_ic',
        'no_tel',
        'email',
        'bidang'
    ];
}
