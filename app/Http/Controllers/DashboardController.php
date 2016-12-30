<?php

namespace App\Http\Controllers;

use App\Application;
use App\Message;
use Illuminate\Http\Request;
use DB;
use App\Notice;
use App\Http\Requests;

class DashboardController extends Controller
{
    public function index(){
        $totaluser = DB::table('users')->count();
        $totaljob= DB::table('jobs')->count();
        $messages=Message::limit(5)->get();
        $app=DB::table('applications')->count();
       // dd($messages);
        return view('Deshboard.index',compact('totaluser','messages','totaljob','app'));
    }

    public function store(Request $request){
        $this->validate($request,[
            "notice_title" => "required",
            "description" => "required",
        ]);

        $notices=Notice::create($request->all());

        return redirect('admin/dashboard');
    }
}
