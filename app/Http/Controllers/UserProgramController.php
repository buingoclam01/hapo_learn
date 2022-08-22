<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserProgramRequest;

class UserProgramController extends Controller
{
    public function store(Request $request)
    {
        $program = Program::find($request['program_id']);
        $program->users()->attach(auth()->id());

        return redirect($request['program_link']);
    }
}
