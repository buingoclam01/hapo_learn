<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Lesson extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'title',
        'time',
        'description',
        'cours_id',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_lesson');
    }
}
