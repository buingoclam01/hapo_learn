<?php

namespace App\Http\Controllers;

use App\Http\Request\StoreUserCourseRequest;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\UserCourse;

class UserCourseController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = Course::find($request['course_id']);
        $course->users()->attach(auth()->user()->id);

        return redirect()->back();
    }


    public function update(Request $request, $id)
    {
        UserCourse::withTrashed()->where([
            'course_id' => $id,
            'user_id' => auth()->id()
        ])->restore();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserCourse::where([
            'course_id' => $id,
            'user_id' => auth()->id()
        ])->delete();

        return redirect()->back();
    }
}
