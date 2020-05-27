<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scale extends Model
{
    protected $table = 'scales';

    protected $fillable = [
        'date', 'time'
    ];

    public function professional()
    {
        return $this->hasOne('App\Professional');
    }
}
