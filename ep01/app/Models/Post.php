<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'subtitle',
        'content'
    ];

    public function setTitleAttribute($title){
        $this->attributes['title'] = $title;
        $this->attributes['author'] = Post::factory()->author;
        $this->attributes['slug'] = Str::slug($title);
    }
}
