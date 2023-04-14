<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class LoginController extends Controller{
    public function index(){
        if(Sentinel::check()){
			if(Sentinel::getUser()){
				return redirect()->route('dashboard.index'); //ini ke home
			}
			else{
				return view('auth.login');
			}
		}
		else{
			return view('auth.login');
		}
    }

    public function login(Request $request){
        $credentials = array(
			'email'    => $request->email,
			'password' => $request->password,
		);

        try{
			if(Sentinel::authenticate($credentials)){
				$user = Sentinel::getUser();
                $role = $user->roles->first();

                if ($role->slug !== 'root_admin') {
                    Sentinel::logout();
                    return redirect()->route('login.index');
                }

                return redirect()->route('dashboard.index');
            } else{
                return redirect()->route('login.index');
            }
		}
		catch(ThrottlingException $ex){
			return redirect()->route('login.index');
		}
    }

    public function logout(){
        Sentinel::logout();
        return redirect()->route('login.index');
    }
}