<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';

    protected $fillable = [
        'name', 'cpf', 'rg', 'birth', 'email'
    ];

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function professional()
    {
        return $this->belongsTo('App\Professional');
    }
}
