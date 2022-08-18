<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'time',
        'message',
        'rate',
        'course_id',
        'user_id',
        'parent_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeMain($query)
    {
        return $query->orderBy('parent_id', config('course.sort_hight_to_low'))->limit(config('course.review_number_home'));
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function getPostedTimeAttribute()
    {
        return Carbon::parse($this['created_at'])->format(config('course.review_date'));
    }
}
