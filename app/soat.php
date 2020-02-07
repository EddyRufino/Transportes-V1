<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class soat extends Model
{
    protected $guarded = [];

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }

    public function dato()
    {
        return $this->belongsTo(Dato::class);
    }

}
