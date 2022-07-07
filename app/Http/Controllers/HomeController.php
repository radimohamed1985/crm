<?php

namespace App\Http\Controllers;

use App\Models\teamleader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function index()
    {
        $check =teamleader::where('name',Auth()->user()->name)->first();
       
        if($check->name == Auth()->user()->name){
            return view('home');

        }
    }
}
