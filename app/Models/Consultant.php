<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    protected $table = 'consultants';

    // protected $fillable = [
    //     'name',
    //     'profile_photo',
    // ];

    public function specialties()
    {
        return $this->belongsToMany(Specialty::class, 'consultant_specialties');
    }
}
