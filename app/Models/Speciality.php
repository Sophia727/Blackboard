<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "faculty_id",
        "subject_id",
    ];
    public function subjects(){
        return $this->belongsToMany(Subject::class);
    }
    public function faculty(){
        return $this->belongsTo(Faculty::class, 'specialities');
    }
    public function students(){
        return $this->hasMany(User::class);

    }
}
