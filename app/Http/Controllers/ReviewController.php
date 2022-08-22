<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = auth()->id();
        Review::create($data);
        return redirect()->back()->with('status', 'active');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReviewRequest $request, $id)
    {
        Review::find($id)->update($request->all());
        return redirect()->back()->with('status', 'active');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Review::destroy($id);
        return redirect()->back()->with('status', 'active');
    }
}
