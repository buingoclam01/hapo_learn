<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class UserCourse extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'user_id',
        'course_id',
    ];
}
