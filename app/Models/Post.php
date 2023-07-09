<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['category_id','title', 'body', 'image'];


    public static function booted()
    {
        static::creating(function (Post $post) 
        {
            $post->slug  = strtolower(Str::slug($post->title . '-' . Str::random(6)));
        });
    }

    public function getRouteKeyName()
    {
       return 'slug';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
