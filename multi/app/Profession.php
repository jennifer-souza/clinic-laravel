<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $table = 'professions';

    protected $fillable = [
        'professional_id', 'profession', 'license'
    ];

    public function professional()
    {
        return $this->belongsTo(Professional::class, 'id', 'professional_id');
    }
}
