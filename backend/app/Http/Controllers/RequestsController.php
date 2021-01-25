<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Requests;
use App\Models\UserOption;
use App\Models\User;
use App\Models\Group;

class RequestsController extends Controller {

    public function send(Request $request) {
        if(!Requests::where('request_from_id', Auth::user()->id)->exists()){
            $created_request = Requests::Create([
                'request_from_id'    => Auth::user()->id
            ]);
        } else {
            $created_request = Requests::where('request_from_id', Auth::user()->id)->first();
            Requests::where('request_from_id', Auth::user()->id)->update(['approved' => NULL]);
        }
        
        User::where('id', Auth::user()->id)->update(['desired_group_id' => $request->input('group')]);
        
        $colleagues = explode(',', $request->input('colleagues'));
        foreach($colleagues as $c) {
            if(User::where('email', $c)->exists() && User::where('email', $c)->first()->role =="student" && User::where('email', $c)->first()->id != Auth::user()->id && !UserOption::where(['request_from_id' => Auth::user()->id, 'request_with_id' => User::where('email', $c)->first()->id])->exists()){
                UserOption::Create([
                    'request_from_id' => Auth::user()->id,
                    'request_with_id' => User::where('email', $c)->first()['id'],
                    'request_id'      => $created_request->id
                ]);
            }
        }

        return response()->json('Success!');
    }

    public function accept(Request $request) {
        $request_id = $request->input('id');

        $current_request = Requests::where('id', $request_id)->first();
        Requests::where('id', $request_id)->update(['approved' => 1]);

        $student = User::where('id', $current_request->request_from_id)->first();
        User::where('id', $current_request->request_from_id)->update(['current_group_id' => $student->desired_group_id, 'series' => Group::where('id', $student->desired_group_id)->first()['series_id']]);
        
        $desired_colleagues = UserOption::where('request_id', $request_id)->get();
        foreach($desired_colleagues as $dc) {
            $student_desired = User::where('id', $dc->request_with_id)->first();
            if(!empty($student_desired) && is_null($student_desired->current_group_id) && $student_desired->programme == $student->programme && $student_desired->year_of_study == $student->year_of_study) {
                User::where('id', $dc->request_with_id)->update(['current_group_id' => $student->desired_group_id, 'series' => Group::where('id', $student->desired_group_id)->first()['series_id']]);
            }
        }

        return response()->json('Success!');
    }

    public function decline(Request $request) {
        $request_id = $request->input('id');

        $current_request = Requests::where('id', $request_id)->update(['approved' => 0]);

        return response()->json('Success!');
    }
}