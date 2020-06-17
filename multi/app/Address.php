<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
        'patient_id', 'professional_id', 'zip', 'street', 'number', 'complement', 'neighborhood', 'city', 'state'
    ];
}
