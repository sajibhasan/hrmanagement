<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Message;
class JobController extends Controller
{
    public function index(){
        $jobs=Job::all();
        $messages=Message::limit(5)->get();
        return view('job.index',compact('jobs','messages'));
    }
    public function create(){
        $messages=Message::limit(5)->get();
        return view("job.create",compact('messages'));
    }

    public function store(Request $request){
       // dd($request->all());
        $this->validate($request,[
            "position" => "required",
            "description" => "required",
            "post_date" => "required",
            "last_date_to_apply" => "required",
            "close_date" => "required",
            "contact"=>"required",
        ]);

        $request['post_date'] = date('Y-m-d', strtotime($request->get('post_date')));

        Job::create($request->all());
        return redirect('admin/jobs');

    }

    public function edit($id){
        $job=Job::find($id);
        $messages=Message::limit(5)->get();
        return view('job.edit',compact('job','messages'));
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            "position" => "required",
            "description" => "required",
            "post_date" => "required",
            "last_date_to_apply" => "required",
            "close_date" => "required"
        ]);

        Job::find($id)->update($request->all());

        return redirect('admin/jobs');

    }

    public function delete($id){
        $job=Job::findOrFail($id);
        $job->delete();
        return redirect()->back();
    }
}
