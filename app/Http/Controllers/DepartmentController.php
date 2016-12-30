<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use App\Message;
use App\Http\Requests;

class DepartmentController extends Controller
{

    public function index(){
        $departments=Department::all();
        $messages=Message::limit(5)->get();
        return view('department.index',compact('messages','departments'));
    }
    
    public function create(){

        $messages=Message::limit(5)->get();
        return view('department.create',compact('messages'));

    }

    public function store(Request $request){
        $this->validate($request,[
            "department" => "required",
        ]);

        $department=Department::create($request->all());

        return redirect('admin/departments');

    }


    public function edit($id){
        $department=Department::find($id);
        $messages=Message::limit(5)->get();
        return view('department.edit',compact('department','messages'));
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            "department" => "required",
        ]);

        Department::find($id)->update($request->all());

        return redirect('admin/departments');

    }


    public function delete($id){
        $department=Department::findOrFail($id);
        $department->delete();
        return redirect()->back();
    }


}
