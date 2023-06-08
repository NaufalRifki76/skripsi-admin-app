<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\RentOrder;
use App\Models\User;
use App\Models\Venue;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class DashboardController extends Controller{
    public function index(){
        if(!Sentinel::getUser()){
            return redirect()->route('login.index'); //ke login
        }

        $venues = Venue::get();

        $user_players = User::whereHas('user_role', function($q){
            $q->where('role_id', 2);
        })->count();

        $rent = RentOrder::count();

        return view('layout.dashboard', compact('venues', 'user_players', 'rent')); //ke home
    }
}