<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'registration_num',
        'phone',
        'address',
        'role',
        'photo',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function post(){
        return $this->hasMany(Post::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class, 'author_comm_id');
    }
    public function institution(){
        return $this->belongsTo(Institution::class);
    }
    public function faculty()
    {
        return $this->hasMany(Faculty::class);
    }
    public function report(){
        return $this->hasMany(Report::class);
    }
    public function grades(){
        return $this->hasMany(Grades::class);
    }
    public function subjects(){
        return $this->belongsToMany(Subject::class, 'subjects_specialities');
    }
    public function speciality(){
        return $this->belongsTo(Speciality::class);
    }
}
