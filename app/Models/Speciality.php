<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class speciality extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "faculty_id",
        "subject_id",
    ];
    public function subject(){
        return $this->hasMany(Subject::class);
    }
    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }
}
