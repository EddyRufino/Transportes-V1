<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificado extends Model
{
    protected $guarded = [];

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }
}
