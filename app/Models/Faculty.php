<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'rector_id',
        'photo',
        'speciality_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function speciality(){
        return $this->belongsTo(Institution::class);
    }
}
