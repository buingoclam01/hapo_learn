<?php

namespace App\Http\Controllers;

use App\Http\Requests\RepReviewEditRequest;
use App\Http\Requests\RepReviewRequest;
use App\Models\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
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
    public function store(RepReviewRequest $request)
    {

        Reply::create($request->all());
        return redirect()->back()->with('message', __('course_detail.reply_review_successful'));
    }

    
    public function update(RepReviewEditRequest $request, $id)
    {
        $reply = Reply::find($id);
        $reply['content'] = $request['rep_content_edit'];
        $reply->save();
        return redirect()->back()->with('message', __('course_detail.edit_review_successful'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reply::destroy($id);
        return redirect()->back()->with('message', __('course_detail.delete_review_successful'));
    }
}
