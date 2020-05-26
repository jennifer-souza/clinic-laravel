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
        return $this->belongsTo('App\Pessoa');
    }

    public function phone()
    {
        return $this->belongsToMany('App\Phone');
    }

    public function profession()
    {
        return $this->belongsTo('App\Profession');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
