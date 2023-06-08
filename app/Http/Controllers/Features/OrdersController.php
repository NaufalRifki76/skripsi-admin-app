<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        return view('data-pemesanan.index');
    }

    public function detail()
    {
        return view('data-pemesanan.detail');
    }
}
