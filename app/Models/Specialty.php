<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $table = 'specialties';

    protected $fillable = [
        'name',
    ];

    public function consultants()
    {
        return $this->belongsToMany(Consultant::class, 'consultant_specialties');
    }
}
