<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\ProgramUser;

class ProgramController extends Controller
{
    //


    public function store(Request $request)
    {
        if (!ProgramUser::where(['user_id' => auth()->id(), 'program_id' => $request['program_id']])->count()) {
            $program = Program::find($request['program_id']);
            $program->users()->attach(auth()->user()->id);
        }

        return redirect()->to($request['source_code']);
    }
}
