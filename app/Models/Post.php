<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "photo",
        "title",
        "description",
        "author_id",
        "publication_date",
        "published",
        
    ];
    public function comment(){
        return $this->hasMany(Comment::class);
    }
    public function author(){
        return $this->belongsTo(User::class);
    }
}
