<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phones';

    protected $fillable = [
        'ddd', "phone"
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
