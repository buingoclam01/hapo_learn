<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Tag extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'name',
        'course_id',
    ];

    public function course()
    {
        return $this->belongsToMany(Course::class);
    }
}
