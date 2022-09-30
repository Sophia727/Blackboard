<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "file",
        "tag",
        "author_id",

    ];
    public function author(){
        return $this->belongsTo(User::class);
    }
}
