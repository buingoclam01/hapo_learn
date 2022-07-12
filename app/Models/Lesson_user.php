<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Lesson_user extends Model
{
    use HasFactory, softDeletes;
    protected $fillable =[
        'user_id',
        'lesson_id',
        'register_lesson_time',
    ];
}
