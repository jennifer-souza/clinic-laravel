<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Address;
use App\Person;
use App\Phone;
use App\Profession;

class Professional extends Model
{
    protected $table = 'professionals';

    
    protected $fillable = [
        'schedule_id'
    ];

    public function person()
    {
        return $this->hasOne(Person::class, 'professional_id', 'id');
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'professional_id', 'id');
    }

    public function patient()
    {
        return $this->hasMany(Patient::class, 'professional_id', 'id');
    }
    
    public function phone()
    {
        return $this->hasMany(Phone::class, 'professional_id', 'id');
    }
    
    public function profession()
    {
        return $this->hasOne(Profession::class, 'professional_id', 'id');
    }
}
