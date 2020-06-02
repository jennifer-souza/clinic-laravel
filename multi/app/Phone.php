<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Professional;
use App\Patient;

class Phone extends Model
{
    protected $table = 'phones';

    protected $fillable = [
        'patient_id', 'professional_id', 'ddd', 'phone'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'id', 'patient_id');
    }

    public function professional()
    {
        return $this->belongsTo(Professional::class, 'id', 'professional_id');
    }
}
