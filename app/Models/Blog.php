<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'blog_title',
        'blog_description',
         'blog_status',
         'blog_rank',
         'blog_sidebar',
        'category_id',
    ];
     public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function categories()
    {
        return $this->belongsToMany(BlogCategory::class);
    }

}
