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
        return $this->belongsToMany(User::class,'user_course');
    }

    public function teacherCourse()
    {
        return $this->belongsToMany(User::class, 'teacher_course');
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

    public function getLearnersAttribute()
    {
        return $this->users()->count();
    }

    public function getLessonsAttribute()
    {
        return $this->lessons()->count();
    }

    public function getTimesAttribute()
    {
        return $this->lessons()->sum('time');
    }

    public function scopeSearch($query, $data)
    {
        if (isset($data['keyword'])) {
            $query->where('name', 'LIKE', '%' . $data['keyword'] . '%')->orWhere('description', 'LIKE', '%' . $data['keyword'] . '%');
    }
    }
}

