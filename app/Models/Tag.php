<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Tag extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'name',
        'slug',
    ];

    // Relacion muchos a muchos

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    // Relacion muchos a muchos

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
