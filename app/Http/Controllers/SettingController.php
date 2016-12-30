<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Message;
class SettingController extends Controller
{
    public function edit(){
        $messages=Message::limit(5)->get();
        return view('setting.edit',compact('messages'));
    }

    public function updateDetail(Request $request){
        //dd($request->all());
        $this->validate($request,[
            "name" => "required",
            "email" => "required",
        ]);

        $users=User::find(Auth::user()->id);
        $users->name=$request->get('name');
        $users->email=$request->get('email');
        $users->save();

        return redirect()->back();

    }

    public function updatePassword(Request $request){
        //dd($request->all());
        $this->validate($request,[
            'password' => 'required|min:6|confirmed',
        ]);

        $users=User::find(Auth::user()->id);
        $users->password=bcrypt($request->get('password'));
        $users->save();

        return redirect()->back();

    }

    public function userEdit(){
        $messages=Message::limit(5)->get();
        return view('setting.userEdit',compact('messages'));
    }

    public function updateUserDetail(Request $request){
        //dd($request->all());
        $this->validate($request,[
            "name" => "required",
            "email" => "required",
        ]);

        $users=User::find(Auth::user()->id);
        $users->name=$request->get('name');
        $users->email=$request->get('email');
        $users->save();

        return redirect()->back();

    }

    public function updateUserPassword(Request $request){
        //dd($request->all());
        $this->validate($request,[
            'password' => 'required|min:6|confirmed',
        ]);

        $users=User::find(Auth::user()->id);
        $users->password=bcrypt($request->get('password'));
        $users->save();

        return redirect()->back();

    }
}
