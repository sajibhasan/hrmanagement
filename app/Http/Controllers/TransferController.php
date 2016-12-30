<?php

namespace App\Http\Controllers;

use App\Transfer;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Message;
class TransferController extends Controller
{

    public function index(){
        $transfers=Transfer::all();
        $messages=Message::limit(5)->get();
        return view('transfer.index',compact('transfers','messages'));
    }

    public function create(){

        $users=User::selectRaw('CONCAT(employeeid,"(",name,")") as full_name,id')->lists('full_name','id');
        //dd($users);
        $messages=Message::limit(5)->get();
        return view('transfer.create',compact('users','messages'));
    }

    public function store(Request $request){
       // dd($request->all());

        $this->validate($request,[
            "user_id" => "required",
            "transfer_date" => "required",
            "previous_campus" => "required",
            "present_campus" => "required",
        ]);

        $transfer=Transfer::create($request->all());

        return redirect('admin/transfers');
    }

    public function edit($id){
        $transfer=Transfer::find($id);
        $users=User::selectRaw('CONCAT(employeeid,"(",name,")") as full_name,id')->lists('full_name','id');
        $messages=Message::limit(5)->get();
        return view('transfer.edit',compact('transfer','users','messages'));
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            "user_id" => "required",
            "transfer_date" => "required",
            "previous_campus" => "required",
            "present_campus" => "required",
        ]);

        Transfer::find($id)->update($request->all());

        return redirect('admin/transfers');

    }

    public function delete($id){
        $transfer=Transfer::findOrFail($id);
        $transfer->delete();
        return redirect()->back();
    }
}
