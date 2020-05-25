<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\BelongsTo;
//use Schedule;

class Type extends Model
{
    protected $table = 'types';

    protected $fillable = [
        'type', 'observations'
    ];

    public function schedule()
    {
        return $this->belongsTo('App\Schedule');
    }
}
