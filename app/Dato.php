<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    protected $fillable = 
    [
        'nombre', 'apellido', 'dni'
    ];

    public function paradero()
    {
        return $this->belongsTo(Paradero::class);
    }

    public function soat()
    {
        return $this->belongsTo(soat::class);
    }

    // V-2
    public function licencia()
    {
        return $this->hasOne(Licencia::class);
    }
}
