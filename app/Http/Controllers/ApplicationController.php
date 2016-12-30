<?php

namespace App\Http\Controllers;

use App\Application;
use App\Leave;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function index(){
        $applications=Application::where('user_id',Auth::user()->id)->get();

        //dd($applications);
        return view('application.index',compact('applications'));

    }
    public function create(){
        $leaves=Leave::lists('leavetype','leavetype');
        return view('application.create',compact('leaves'));
    }

    public function store(Request $request){
        //dd($request->all());
        $this->validate($request,[
            "leave_type" => "required",
            "leave_reason" => "required",
            "leave_from" => "required",
            "leave_to" => "required"
        ]);

        $application=new Application();
        $application->user_id=Auth::user()->id;
        $application->leave_type=$request->input('leave_type');
        $application->leave_reason=$request->input('leave_reason');
        $application->leave_from=$request->input('leave_from');
        $application->leave_to=$request->input('leave_to');
        $application->save();
        return redirect('/home');
    }

    public function active($id){
        $applications=Application::find($id);
        //dd($applications);
        if($applications->count()){

            $applications->status=1;
            if($applications->save()){

                return redirect()->back();
            }
        }
    }
}
