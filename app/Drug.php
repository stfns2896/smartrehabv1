<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\DrugScope;

class Drug extends Model
{
    const TABLE_NAME = 'drug';

    protected $table = 'category';

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new DrugScope);
    }
}
