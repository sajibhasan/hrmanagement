<?php

namespace App\Http\Controllers;

use App\Application;
use App\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Message;
class LeaveController extends Controller
{
    public function index(){
        $applications=Application::all();
        $messages=Message::limit(5)->get();
        return view('leave.index',compact('messages','applications'));
    }
    public function create(){

        $messages=Message::limit(5)->get();
        return view('leave.create',compact('messages'));
    }

    public function store(Request $request){

        // dd($request->get('leavetype'));

        $leavetypes=$request->get('leavetype');
        //foreach ($leavetypes  as $key => $leavetype) {
//            $this->validate($request, [
//                "leavetype.*" => "required",
//            ]);
        //}

        $inputs = request()->all();
        $validator = Validator::make($inputs, [
            'leavetype.*' => 'required',
        ]);
        //dd($validator->errors);
        //dd($validator->messages());
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)// send back all errors to the login form
                ->withInput();
        }


        foreach($request->get('leavetype') as $item){
            $leave=new Leave();
            $leave->leavetype=$item;
            $leave->save();
        }

        return redirect()->back();

    }

    public function delete($id){

        $notice=Application::findOrFail($id);
        $notice->delete();
        return redirect()->back();

    }
}
