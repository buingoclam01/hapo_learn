<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Lesson extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'time',
        'description',
        'cours_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'lesson_user', 'user_id');
    }

    public function scopeCountLesson($query)
    {
        return $query->limit(config('course.review_number_home'))->get();
    }
}
