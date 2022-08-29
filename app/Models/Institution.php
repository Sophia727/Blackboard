<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'slogan',
        'logo',
        'website',
        'facebook',
        'linkedIn',
    ];

    public function user(){
        return $this->hasMany(User::class);
    }
}
