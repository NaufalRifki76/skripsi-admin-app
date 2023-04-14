<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;

class CompetitionController extends Controller{
    public function index(){
        return view('pengembangan-bakat.kompetisi-sekolah');
    }
}