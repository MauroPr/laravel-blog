<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Str;


class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'title',
        'body',
        'iframe',
        'image',
        'user_id',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getGetExcerptAttribute()
    {
        return Str::limit($this->body, 100, '...');
    }

    public function getGetImageAttribute()
    {
        if ($this->image) {
            return url("Storage/$this->image");
        }
    }
}
