<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public static function handleUploadImage($avatar)
    {
        // $uploadImage->getClientOriginalName();
        // dd($uploadImage->getClientOriginalName());
        $path = $avatar->store('public/profile');
        return 'storage/' . substr($path, strlen('public/'));
    }
}
