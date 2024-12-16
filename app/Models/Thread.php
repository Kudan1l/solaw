<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Thread extends Model
{
    //
    // app/Models/Thread.php
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
        protected $fillable = ['title', 'content' ];
    
        // Relasi dengan User
        public function user()
        {
            return $this->belongsTo(User::class);
        }
}
