<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $table = 'professions';

    protected $fillable = [
        'profession', 'license', 'professional_id'
    ];

    public function __construct(string $profession, string $license)
    {
        $this->profession = $profession;
        $this->license = $license;
    }

    public function professional()
    {
        return $this->hasOne('App\Professional');
    }
}
