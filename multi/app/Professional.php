<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Pessoa;
use Phone;
use Profession;

class Professional extends Model
{
    protected $table = 'professionals';

    protected $fillable = [
        'pessoa_id', 'phone_id', 'profession_id', 'user_id'
    ];

    public function pessoa()
    {
        return $this->hasOne('App\Pessoa');
    }

    public function phone()
    {
        return $this->hasMany('App\Phone');
    }

    public function profession()
    {
        return $this->hasOne('App\Profession');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
