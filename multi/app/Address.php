<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
        'patient_id', 'professional_id', 'zip', 'address', 'number', 'complement', 'neighborhood', 'city'
    ];

    public function __construct(string $zip, string $address, string $number, 
    string $complement, string $neighborhood, string $city)
    {
        $this->zip = $zip;
        $this->address = $address;
        $this->number = $number;
        $this->complement = $complement;
        $this->neighborhood = $neighborhood;
        $this->city = $city;
    }
}
