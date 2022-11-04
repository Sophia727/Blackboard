<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    
    protected $fillable =[
    "name",
    "professor_id",
    "faculty_id",
    "classroom_name",
    "semester",
    
    
    ];
    public function users(){
        return $this->hasMany(User::class);
    }
    public function specialities(){
        return $this->belongsToMany(Speciality::class, 'subjects_specialities');
    }
    public function grades(){
        return $this->hasMany(Grades::class);
    }
    public function students(){
        return $this->belongsToMany(User::class, 'speciality_students');
    }

}
