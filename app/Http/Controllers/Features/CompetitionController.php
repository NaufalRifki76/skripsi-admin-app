<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class CompetitionController extends Controller{
    public function sekolah(){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            return view('pengembangan-bakat.kompetisi-sekolah');
        }
    }

    public function addsekolah(){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            return view('pengembangan-bakat.tambah-komsekolah');
        }
    }

    public function umur(){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            return view('pengembangan-bakat.kompetisi-umur');
        }
    }

    public function addumur(){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            return view('pengembangan-bakat.tambah-komumur');
        }
    }
}