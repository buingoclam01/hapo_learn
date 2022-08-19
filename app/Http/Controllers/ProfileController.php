<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $user = User::find(auth()->id());
        $courses = $user->courses()->get();
        return view('profile', compact('user', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(ProfileRequest $request, $id)
    {
        if (!empty($request['upload_image'])) {
            $request['image'] = UserService::handleUploadImage($request->file('upload_image'));
        }
        User::find($id)->update(array_filter($request->all()));
        return redirect()->back();
    }
}
