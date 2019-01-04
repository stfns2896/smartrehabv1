<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\FrequencyScope;

class Frequency extends Model
{
    const TABLE_NAME = 'frequency';

    protected $table = 'category';

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new FrequencyScope);
    }
}
