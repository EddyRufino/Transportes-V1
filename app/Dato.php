<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    protected $fillable = 
    [
        'nombre', 'apellido', 'dni'
    ];
}
