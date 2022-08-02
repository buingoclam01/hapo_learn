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
        return $this->belongsToMany(User::class, 'user_course');
    }

    public function teacherCourse()
    {
        return $this->belongsToMany(User::class, 'teacher_course');
    }

    public function tags()
    {
         return $this ->belongsToMany(Tag::class, 'course_tag');
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
            $query->where('name', 'LIKE', "%" . $data['keyword'] . "%")->orWhere('description', 'LIKE', "%" . $data['keyword'] . "%");
        }

        if (isset($data['created_time']) && $data['created_time'] == config('course.sort_by_newest')) {
            $query->orderBy('created_at', config('course.sort_hight_to_low'));
        }

        if (isset($data['teachers']) && !empty($data['teachers'])) {
            $query->whereHas('teacherCourse', function ($query) use ($data) {
            $query->whereIn('user_id', $data['teachers']);
            });
        }

        if (isset($data['learner']) && !empty($data['learner'])) {
            $query->withCount('users')->orderBy('users_count', $data['learner']);
        }

        if (isset($data['time']) && !empty($data['time'])) {
            $query->withSum('lessons', 'time')->orderBy('lessons_sum_time', $data['time']);
        }

        if (isset($data['lesson']) && !empty($data['lesson'])) {
            $query->withCount('lessons')->orderBy('lessons_count', $data['lesson']);
        }

        if (isset($data['tags']) && !empty($data['tags'])) {
            $query->whereHas('tags', function ($query) use ($data) {
            $query->whereIn('tag_id', $data['tags']);
            });
        }

        if (isset($data['review']) && !empty($data['rate'])) {
            $query->withCount('reviews')->orderBy('reviews_count', $data['review']);
        }

        return $query;
    }
}
