<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\softDeletes;

class User extends Authenticatable
{
    use HasFactory, softDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'address',
        'date_of_birth',
        'phone',
        'about',
        'role',
    ];
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function userCourse()
    {
        return $this->belongsToMany(Courses::class);
    }

    public function teacherCourse()
    {
        return $this->belongsToMany(Courses::class, 'Teacher_course');
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }

    }

