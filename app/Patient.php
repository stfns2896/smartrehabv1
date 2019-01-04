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

    public function birthplace()
    {
        return $this->belongsTo(City::class);
    }

    public function livingAddress()
    {
        return $this->belongsTo(City::class);
    }

    public function familyAddress()
    {
        return $this->belongsTo(City::class);
    }

    public function patientSource()
    {
        return $this->belongsTo(PatientSource::class);
    }

    public function costSource()
    {
        return $this->belongsTo(CostSource::class);
    }

    public function frequency()
    {
        return $this->belongsTo(Frequency::class);
    }

    public function drugs()
    {
        return $this->belongsToMany(Drug::class);
    }
}
