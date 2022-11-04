<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    use HasFactory;
    protected $fillable = [
        'grade',
        'subject_id',
        'semester',
        'student_id',
        'author_id',
        'message_id'
    ];
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
    public function authors(){
        return $this->hasMany(User::class);

    }
    public function students(){
        return $this->belongsTo(User::class);
    }
}
