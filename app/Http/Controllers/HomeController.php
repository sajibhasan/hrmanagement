<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Job;
use App\Notice;
use App\Promotion;
use App\Retirement;
use App\Suspension;
use App\Transfer;
use App\User;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions=Promotion::where('user_id', '=', Auth::user()->id)->get();
        $transfers=Transfer::where('user_id', '=', Auth::user()->id)->get();
        $users=User::where('id', '=', Auth::user()->id)->get();
        $suspensions=Suspension::where('user_id', '=', Auth::user()->id)->get();
        $retirements=Retirement::where('user_id', '=', Auth::user()->id)->get();
        $notices=Notice::all()->take(2);
       // dd($notices);
        //dd($users);
        return view('employee.index',compact('users','promotions','transfers','suspensions','retirements','notices'));
    }

    public function start(){
        return view('employee.start');
    }

    public function jobPost(){
        $jobs=Job::all();
        return view('job.home',compact('jobs'));
    }
}
