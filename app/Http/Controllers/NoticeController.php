<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;
use App\Message;
use App\Http\Requests;

class NoticeController extends Controller
{

    public function index(){
        $notices=Notice::all();
        $messages=Message::limit(5)->get();
        return view('notice.index',compact('notices','messages'));
    }
    public function show(){

        $notices=Notice::all();

        return view('notice.show',compact('notices'));

    }
    public function create(){
        $messages=Message::limit(5)->get();
        return view('notice.create',compact('messages'));
    }

    public function store(Request $request){

       // dd($request->all());
        $this->validate($request,[
            "notice_title" => "required",
            "description" => "required",
        ]);

        $notices=Notice::create($request->all());
        return redirect('admin/notices');
    }

    public function edit($id){
        $notice=Notice::find($id);
        $messages=Message::limit(5)->get();
        return view('notice.edit',compact('notice','messages'));
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            "notice_title" => "required",
            "description" => "required",
        ]);


        Notice::find($id)->update($request->all());

        return redirect('admin/notices');

    }

    public function delete($id){
        $notice=Notice::findOrFail($id);
        $notice->delete();
        return redirect()->back();
    }
}
