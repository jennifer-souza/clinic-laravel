<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

    protected $fillable = [
        'patient_id', 'professional_id', 'name', 'cpf', 'rg', 'birth', 'email'
    ];
    
    public function __construct(string $name, string $cpf, string $rg, 
    string $birth, string $email)
    {
        $this->name = $name;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->birth = $birth;
        $this->email = $email;
    }
}
