<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients'; 
    
    protected $fillable = [
        'professional_id', 'schedule_id'
    ];

    public function person()
    {
        return $this->hasOne(Person::class, 'patient_id', 'id');
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'patient_id', 'id');
    }
}
