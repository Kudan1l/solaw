<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    protected $table = 'consultants';

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'experience_years',
        'about',
        'profile_photo',
        'education',
        'location',
    ];

    public function specialties()
    {
        return $this->belongsToMany(Specialty::class, 'consultant_specialties');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function averageRating()
    {
        return $this->ratings->avg('rating');
    }
}
