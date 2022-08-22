<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Http\Requests\StoreUserLessonRequest;

class UserLessonController extends Controller
{
    public function store(StoreUserLessonRequest  $request)
    {
        $lesson = Lesson::find($request['lesson_id']);
        $lesson->users()->attach(auth()->id());

        return redirect()->route('lessons', [$request['lesson_id']]);
    }
}
