<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "author_id",
        "message",
        "publication_date",
        "published",

    ];
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
