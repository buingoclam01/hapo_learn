<?php

namespace App\Http\Middleware;

use App\Models\Course;
use Closure;
use Illuminate\Http\Request;

class CanLearnLessons
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $course = Course::find($request['course_id']);
        if (!$course->isJoined()->count() || $course->isFinished()->count()) {
            return redirect()->back()->with('message', 'Bạn cần tham gia khóa học để có thể học bài');
        }

        return $next($request);
    }
}
