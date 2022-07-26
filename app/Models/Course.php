<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
       'name',
       'image',
       'description',
       'price',
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function teacherCourse()
    {
        return $this->belongsToMany(User::class, 'teacher_course', 'user_id');
    }

    public function tags()
    {
         return $this ->belongsToMany(Tag::class);
    }


    public function scopeMain($query)
    {
        return $query->limit(config('course.course_number_home'));
    }

    public function scopeOther($query)
    {
        return $query->orderBy('name', config('course.sort_low_to_hight'))->limit(config('course.course_number_home'));
    }
}
