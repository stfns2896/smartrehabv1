<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\CostSourceScope;

class CostSource extends Model
{
    const TABLE_NAME = 'cost_source';

    protected $table = 'category';

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new CostSourceScope);
    }
}
