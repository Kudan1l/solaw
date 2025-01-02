<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'consultant_id',
        'user_id',
        'rating',
        'comment',
    ];

    public function consultant()
    {
        return $this->belongsTo(Consultant::class);
    }

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
