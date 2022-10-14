<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "author_comm_id",
        "post_id",
        "message",
        "publication_date",
        "published",

    ];
    public function comments(){
        return $this->belongsTo(Post::class);
    }
}
