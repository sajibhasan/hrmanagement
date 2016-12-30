<?php

namespace App\Http\Controllers;

use App\Retirement;
use App\Suspension;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Message;

class RetirementController extends Controller
{

    public function index(){
        $retirements=Retirement::all();
        $messages=Message::limit(5)->get();
        return view('retirement.index',compact('retirements','messages'));
    }
    public function create(){

        $users=User::selectRaw('CONCAT(employeeid,"(",name,")") as full_name,id')->lists('full_name','id');
        $messages=Message::limit(5)->get();
        //dd($users);

        return view('retirement.create',compact('users','messages'));
    }

    public function store(Request $request){

       // dd($request->all());

        $this->validate($request,[
            "user_id" => "required",
            "retirement_date" => "required",
            "award" => "required",
        ]);

        $retirements=Retirement::create($request->all());

        return redirect('admin/retirements');

    }

    public function edit($id){
        $retirement=Retirement::find($id);
        $messages=Message::limit(5)->get();
        $users=User::selectRaw('CONCAT(employeeid,"(",name,")") as full_name,id')->lists('full_name','id');
        return view('retirement.edit',compact('retirement','users','messages'));
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            "user_id" => "required",
            "retirement_date" => "required",
            "award" => "required",
        ]);

        Retirement::find($id)->update($request->all());

        return redirect('admin/retirements');

    }

    public function delete($id){
        $retirement=Retirement::findOrFail($id);
        $retirement->delete();
        return redirect()->back();
    }
}
