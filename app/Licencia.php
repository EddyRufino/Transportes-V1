<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    protected $guarded = [];

    public function dato()
    {
        return $this->belongsTo(Dato::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

}
