<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $table = 'professions';

    protected $fillable = [
        'profession', 'license'
    ];

    public function professional()
    {
        return $this->hasOne('App\Professional');
    }
}
