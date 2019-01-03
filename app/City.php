<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';

    public function provinceId()
    {
        return $this->belongsTo(\App\Province::class);
    }
}
