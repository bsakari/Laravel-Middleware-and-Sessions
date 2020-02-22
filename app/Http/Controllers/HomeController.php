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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //session(['king'=>'Lec']);
        //session(['fracia'=>'Admin']);
        //session()->forget('fracia');
        //session()->flush();
        //return session()->all();
        //echo session('fracia');
        $request->session()->flash('message','Data saved successfully');
        return $request->session()->get('message');
    }
}
