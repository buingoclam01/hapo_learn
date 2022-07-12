<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Program extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = [
        'name',
        'lesson_id'
    ];





    public function Lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }


}
