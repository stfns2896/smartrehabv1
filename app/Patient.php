<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patient';

    public function religion()
    {
        return $this->belongsTo(Religion::class);
    }
}
