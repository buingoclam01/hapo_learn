<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Review extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'time',
        'message',
        'rate',
        'lesson_id',
        'user_id',
        'parent_id',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
