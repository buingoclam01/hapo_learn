<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\UserCourse;
use App\Models\Lesson;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Course::main()->get();
        $reviews = Review::main()->get();
        $otherCourses = Course::other()->get();
        $countCourses = Course::count();
        $countLessons = Lesson::count();
        $learners = UserCourse::learner()->get()->count();
        return view('home', compact('courses', 'reviews', 'otherCourses', 'countCourses', 'countLessons', 'learners'));
    }
}
