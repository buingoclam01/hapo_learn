<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Request\ProfileRequest;
use App\Services\UserService;

class ProfileController extends Controller
{

    public function index()
    {
        $user = User::find(auth()->id());
        $courses = $user->courses;

        return view('profiles.index', compact('user', 'courses'));
    }


    public function update(ProfileRequest $request, $id)
    {
        if (!empty($request['upload_image'])) {
            $request['image'] = UserService::handleUploadImage($request->file('upload_image'));
        }
        User::find($id)->update(array_filter($request->all()));
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
        //
    }
}
