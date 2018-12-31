<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\LeaderScope;

class Leader extends Model
{
    const TABLE_NAME = 'leader';

    protected $table = 'category';

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new LeaderScope);
    }
}
