<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;

class CompetitionController extends Controller{
    public function sekolah(){
        return view('pengembangan-bakat.kompetisi-sekolah');
    }

    public function umur(){
        return view('pengembangan-bakat.kompetisi-umur');
    }
}