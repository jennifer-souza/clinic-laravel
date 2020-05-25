<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients'; 
    
    protected $fillable = [
        'pessoa_id', 'phone_id', 'endereco_id'
    ];

    public function pessoa()
    {
        return $this->hasOne('App\Pessoa');
    }

    public function phone()
    {
        return $this->hasMany('App\Phone');
    }

    public function endereco()
    {
        return $this->hasOne('App\Endereco');
    }
}
