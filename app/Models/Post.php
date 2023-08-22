<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }
    public function attachment()
    {
        return $this->morphMany(Atachment::class, 'attachable');
    }
    public function favorites()
    {
        return $this->belongsToMany(Favorite::class, 'favoriteable');
    }
    public function like()
    {
        return $this->belongsToMany(Like::class, 'favoriteable');
    }

    public function category() {
        return $this->belongsToMany(Category::class, 'post_categories', 'post_id', 'category_id');
    }
}


