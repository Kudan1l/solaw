<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = "articles";

    protected $fillable = [
        "title",
        "description",
        "content",
        "thumbnail_url",
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'article_category');
    }
    
}
