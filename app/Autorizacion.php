<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autorizacion extends Model
{
    protected $guarded = [];

    public function dato()
    {
        return $this->belongsTo(Dato::class);
    }
}
