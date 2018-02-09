<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisiones extends Model
{
    protected $table = "create_divisiones";
    protected $fillable = [
        'dividiendo', 'divisor', 'resultado',
    ];
}
