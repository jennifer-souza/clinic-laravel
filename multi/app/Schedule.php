<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';

    protected $fillable = [];

    public function professional()
    {
        return $this->hasOne(Professional::class, 'schedule_id', 'id');
    }

    public function patient() 
    {
        return $this->hasOne(Patient::class, 'schedule_id', 'id');
    }

    public function type()
    {
        return $this->hasOne(Type::class, 'schedule_id', 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'schedule_id', 'id');
    }
}
