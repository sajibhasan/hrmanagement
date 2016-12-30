<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index(){
        $allMessages=Message::all();

        $messages=Message::limit(5)->get();

        return view('message.index',compact('allMessages','messages'));
    }

    public function create(){
        $messages=Message::limit(5)->get();
        return view('message.create',compact('messages'));
    }

    public function store(Request $request){
        //dd($request->all());

        $this->validate($request,[
            "body" => "required",

        ]);

        //$request['user_id']=Auth::user()->id;
        //$transfer=Transfer::create($request->all());
        $message=new Message();
        $message->user_id=Auth::user()->id;
        $message->body=$request->input('body');
        $message->save();
        //Message::create($request->all());

        return redirect('/home');
    }
}
