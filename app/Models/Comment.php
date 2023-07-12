<?php

namespace App\Models;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'image',
        'comment',
        'blog_post_id'
    ];

    public function blog_post(){
        return $this->belongsTo(BlogPost::class );
    }
}