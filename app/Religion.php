<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\ReligionScope;

class Religion extends Model
{
    const TABLE_NAME = 'religion';

    protected $table = 'category';

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ReligionScope);
    }

    // public function patient()
    // {
    //     return $this->belongsTo(Patient::class);
    // }
}
