<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use App\Models\tag;
use App\Models\Image;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'extract',
        'body',
        'status',
        'slug'
    ];

    // Relacion uno a muchos inversa
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    // Relacion muchos a muchos

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    // relacion uno a uno Polimorfica

    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
