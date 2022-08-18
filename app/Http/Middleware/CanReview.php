<?php

namespace App\Http\Middleware;

use App\Models\Course;
use Closure;
use Illuminate\Http\Request;

class CanReview
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
        $isJoined = Course::find($request['course_id'])->isJoined();
        if (!$isJoined) {
            return redirect('home');
        }

        return $next($request);
    }
}
