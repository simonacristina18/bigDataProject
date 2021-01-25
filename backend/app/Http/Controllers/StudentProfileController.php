<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class StudentProfileController extends Controller {

    public function show(Request $request) {

        $data = [
            'last_name' => Auth::user()->name,
            'first_name' => Auth::user()->first_name,
            'university' => Auth::user()->unviersity,
            'faculty' => Auth::user()->faculty,
            'programme' => Auth::user()->programme,
            'study_language' => Auth::user()->study_language,
            'series' => Auth::user()->series,
            'group' => Auth::user()->group,
            'year_of_study' => Auth::user()->year_of_study,
        ];

        return view('student-profile')->with(array('data' => $data));
    }
}