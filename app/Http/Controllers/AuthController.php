<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class AuthController extends Controller
{



    public function postLogin(Request $request){

        //dd("sdsdsds");
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);

        if(!Auth::attempt(['email' =>$request->input('email'), 'password' =>$request->input('password')],$request->has('remember'))){

            \Session::flash('flash_message','Your post has been saved !!!');
            return redirect()->back();
        }

        return redirect('home');
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/');
    }
}
