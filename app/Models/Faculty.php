<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'id',
        'photo',
        'speciality_id'
    ];
    public function rector(){
        return $this->belongsTo(User::class, 'rector_id');
    }
    public function specialities(){
        return $this->hasMany(Speciality::class, 'faculty_id');
    }
}
