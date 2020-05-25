<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';

    protected $fillable = [
        'professional_id', 'scale_id', 'type_id', 'user_id'
    ];

    public function professional()
    {
        return $this->hasOne('App\Professional');
    }

/*  
    public function scale()
    {
        return $this->hasOne('App\Scale');
    }
*/

    public function type()
    {
        return $this->hasOne('App\Type');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
