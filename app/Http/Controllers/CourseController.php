<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Tag;
use App\Models\User;
use app\Models\Review;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->all();
        $teachers = User::teachers()->get();
        $tags = Tag::all();
        $courses = Course::search($data)->paginate(config('course.paginate'));
        return view('course.index', compact('courses', 'teachers', 'tags', 'data'));
    }

    public function show(Request $request, $id)
    {
        $data = $request->all();
        $course = Course::find($id);
        $otherCourses = Course::other()->get();
        $lessons = $course->lessons()->search($data)->paginate(config('course.paginate_10'));
        $tags = $course->tags;
        $teachers = $course->teacherCourse;
        $reviews = $course->reviews()->get();
        $isJoined = $course->isJoined()->count();
        $isFinished = $course->isFinished()->count();

        return view('course.show', compact(
            'course',
            'otherCourses',
            'tags',
            'lessons',
            'teachers',
            'reviews',
            'isJoined',
            'isFinished',
            'data',
        ));
    }
}
