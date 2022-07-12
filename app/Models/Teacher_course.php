<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Teacher_course extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = [
        'teacher_course_time',
        'user_id',
        'course_id',
    ];
}
