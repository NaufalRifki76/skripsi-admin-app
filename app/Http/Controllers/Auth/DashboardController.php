<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class DashboardController extends Controller{
    public function index(){
        if(Sentinel::getUser()){
            return view('layout.dashboard'); //ke home
        }
        else{
            return redirect()->route('login.index'); //ke login
        }
    }
}