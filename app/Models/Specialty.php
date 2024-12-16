<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    public function consultants()
    {
        return $this->belongsToMany(Consultant::class, 'consultant_specialties');
    }
}
