<?php

namespace App\Http\Controllers;
use DB;
use App\Department;
use App\Designation;
use App\Employee;
use App\User;
use Illuminate\Http\Request;
use App\Message;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class EmployeeController extends Controller
{

    public function index(){
         
        $users=User::all();
        $messages=Message::limit(5)->get();
        return view('employee.adminindex',compact('users','messages'));
    }
    public function create(){
        $allDepartment = Department::all(); 
       // $designations=Designation::lists('designation','designation');
        $messages=Message::limit(5)->get();
        return view("employee.create",compact('allDepartment','messages'));
    }
    public function myformAjax($id){
        $allDesignation = Designation::where("department_id",$id)->lists("designation","id");
        return json_encode($allDesignation);
        
    }
     public function store(Request $request){
        //dd($request->all());
        $this->validate($request,[
            "name" => "required",
            "date" => "required",
            "gender" => "required",
            "phone" => "required",
            "qualification" => "required",
            "address" => "required",
            "paddress" => "required",
            "email" => "required",
            "password" => "required",
            'image' => 'required | mimes:jpeg,jpg,png',
            "department" => "required",
            "designation" => "required",
            "dateofjoining" => "required",
            "optradio" => "required",
            "Salary" => "required",
            "bankname" => "required",
            "accountholder" =>"required",
            'accountnum'=>"required",
        ]);

        $employeeId = rand(10000,1000000);

        $request['password']= bcrypt($request->get('password'));
        if(Input::hasFile('image')){
            $file=Input::file('image');
            $file->move(public_path().'/images/',$file->getClientOriginalName());
           // dd($file->getClientOriginalName());
        }
        $user=new User();
        $user->name=$request->get('name');
        $user->image=$file->getClientOriginalName();
        $user->date=$request->get('date');
        $user->gender=$request->get('gender');
        $user->phone=$request->get('phone');
        $user->qualification=$request->get('qualification');
        $user->address=$request->get('address');
        $user->paddress=$request->get('paddress');
        $user->email=$request->get('email');
        $user->password=$request->get('password');
        $user->employeeid=$employeeId;
        $user->department=$request->get('department');
        $user->designation=$request->get('designation');
        $user->dateofjoining=$request->get('dateofjoining');
        $user->optradio=$request->get('optradio');
        $user->Salary=$request->get('Salary');
        $user->bankname=$request->get('bankname');
        $user->accountholder=$request->get('accountholder');
        $user->accountnum=$request->get('accountnum');
        $user->save();
        //$employee=User::create($request->all());

        return redirect('admin/employees');
    }

    public function edit($id){
        $departments=Department::lists('department','department');
        $designations=Designation::lists('designation','designation');
        $user=User::find($id);
        $messages=Message::limit(5)->get();
        return view('employee.edit',compact('user','messages','departments','designations'));
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            "name" => "required",
            "date" => "required",
            "gender" => "required",
            "phone" => "required",
            "qualification" => "required",
            "address" => "required",
            "paddress" => "required",
            "email" => "required",
            'image' => 'required | mimes:jpeg,jpg,png',
            "department" => "required",
            "designation" => "required",
            "dateofjoining" => "required",
            "optradio" => "required",
            "Salary" => "required",
            "bankname" => "required",
            "accountholder" =>"required",
            'accountnum'=>"required",
        ]);
        if(Input::hasFile('image')){
            $file=Input::file('image');
            $file->move(public_path().'/images/',$file->getClientOriginalName());
            // dd($file->getClientOriginalName());
        }
        $user=User::find($id);
        $user->name=$request->get('name');
        $user->image=$file->getClientOriginalName();
        $user->date=$request->get('date');
        $user->gender=$request->get('gender');
        $user->phone=$request->get('phone');
        $user->qualification=$request->get('qualification');
        $user->address=$request->get('address');
        $user->paddress=$request->get('paddress');
        $user->email=$request->get('email');

        $user->employeeid=$request->get('employeeid');
        $user->department=$request->get('department');
        $user->designation=$request->get('designation');
        $user->dateofjoining=$request->get('dateofjoining');
        $user->optradio=$request->get('optradio');
        $user->Salary=$request->get('Salary');
        $user->bankname=$request->get('bankname');
        $user->accountholder=$request->get('accountholder');
        $user->accountnum=$request->get('accountnum');
        $user->save();
        //->update($request->all());

        return redirect('admin/employees');

    }

    public function delete($id){
        $user=User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }

    public function active($id){
        $applications=User::find($id);
        //dd($applications);
        if($applications->count()){

            $applications->optradio=1;
            if($applications->save()){

                return redirect()->back();
            }
        }
    }


    public function pending($id){
        $applications=User::find($id);
        //dd($applications);
        if($applications->count()){

            $applications->optradio=0;
            if($applications->save()){

                return redirect()->back();
            }
        }
    }


}
