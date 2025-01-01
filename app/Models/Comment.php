<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    // Relasi dengan user
    public function user()
    {
        return $this->belongsTo(User::class);  // Relasi ke pengguna yang mengomentari
    }

    // Relasi dengan thread
    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }

    // Kolom yang dapat diisi
    protected $fillable = ['content', 'thread_id', 'user_id']; // Menambahkan user_id ke $fillable
}
