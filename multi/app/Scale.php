<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scale extends Model
{
    protected $table = 'scales';

    protected $fillable = [
        'schedule_id', 'professional_id', 'date', 'time'
    ];
}
