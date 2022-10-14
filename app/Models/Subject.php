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
    public function speciality(){
        return $this->belongsTo(speciality::class);
    }


}
