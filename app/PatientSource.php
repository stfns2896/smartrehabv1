<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\PatientSourceScope;

class PatientSource extends Model
{
    const TABLE_NAME = 'patient_source';

    protected $table = 'category';

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new PatientSourceScope);
    }
}
