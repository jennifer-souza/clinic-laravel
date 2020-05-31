<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

    protected $fillable = [
        'patient_id', 'professional_id', 'name', 'cpf', 'rg', 'birth', 'email', 'profession'
    ];

    public function professional()
    {
        return $this->belongsTo(Professional::class, 'id', 'professional_id');
    }
}
