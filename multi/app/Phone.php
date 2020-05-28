<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phones';

    protected $fillable = [
        'ddd', 'phone', 'professional_id'
    ];

    public function __construct(Phone $ddd, Phone $phone)
    {
        $this->phone()->ddd = $ddd;
        $this->phone()->phone = $phone;
    }

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function professional()
    {
        return $this->hasOne('App\Professional');
    }
}
