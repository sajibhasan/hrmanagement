<?php

namespace App\Http\Controllers;
use App\Designation;
use App\Message;
use App\Department;
use Illuminate\Http\Request;

use App\Http\Requests;

class DesignationController extends Controller
{

    public function index(){
        $designations=Designation::all();
        $messages=Message::limit(5)->get();
        return view('designation.index',compact('messages','designations'));
    }

    public function create(){
        $allDepartment = Department::all(); 
       // $departments=Department::lists('department','id');
        $messages=Message::limit(5)->get();
        return view('designation.create',compact('messages','allDepartment'));

    }

    public function store(Request $request){

        //dd($request->all());
        $this->validate($request,[
            "department_id" => "required",
            "designation" => "required",
        ]);

        $designation=Designation::create($request->all());

        return redirect('admin/designations');

    }

    public function edit($id){
        $designation=Designation::find($id);
        $departments=Department::lists('department','id');
        $messages=Message::limit(5)->get();
        return view('designation.edit',compact('designation','messages','departments'));
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            "department_id" => "required",
            "designation" => "required",
        ]);

        Designation::find($id)->update($request->all());

        return redirect('admin/designations');

    }


    public function delete($id){
        $designation=Designation::findOrFail($id);
        $designation->delete();
        return redirect()->back();
    }
}
