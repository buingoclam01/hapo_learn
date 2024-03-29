<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasFactory, SoftDeletes;

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


    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'user_course');
    }

    public function teacherCourses()
    {
        return $this->belongsToMany(Course::class, 'teacher_course', 'user_id', 'course_id');
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class, 'lesson_id', 'user_id');
    }

    public function scopeTeachers($query)
    {
        return $query->where('role', config('roles.teacher'));
    }
    
    public function getProgramUsersAttribute()
    {
        return $this->programs()->count();
    }
}
