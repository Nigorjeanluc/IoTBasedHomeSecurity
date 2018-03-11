<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userpages.index');
    }

    public function chart()
    {
        return view('userpages.charts');
    }

    public function flow()
    {
        return view('userpages.flowcharts');
    }

    public function getRoom1(){
        return view('userpages.room1');
    }
    public function getRoom2(){
        return view('userpages.room2');
    }
    public function getRoom3(){
        return view('userpages.room3');
    }
}
