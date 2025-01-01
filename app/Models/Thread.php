<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Thread extends Model
{
    use HasFactory; // Tambahkan penggunaan trait HasFactory

    // Relasi dengan komentar
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Relasi dengan user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Kolom yang dapat diisi
    protected $fillable = ['title', 'content', 'user_id']; // Tambahkan user_id ke $fillable
}
