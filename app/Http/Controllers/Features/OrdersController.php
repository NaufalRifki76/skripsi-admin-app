<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\RentOrder;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class OrdersController extends Controller{
    public function index(Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            $data = RentOrder::all();
            if($request->ajax()){
                return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('confirmation', function($row){
                    if($row->id != NULL){
                        if ($row->confirmation == 0) {
                            return "Pending";
                        } elseif ($row->confirmation == 1) {
                            return "Approved";
                        } elseif ($row->confirmation == 2) {
                            return "Ditolak";
                        }
                    }
                })
                ->addColumn('action', function ($row){
                    $button = "<a style='margin-right: 5px;' class='setuju btn btn-sm btn-info text-white' data-id='".$row['id']."' id='denyBtn' href=''>Detail</a>";
                    $button .= "<a style='margin-right: 5px;' class='setuju btn btn-sm btn-danger text-white' data-id='".$row['id']."' id='accBtn' href=''>Hapus</a>";
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
            }

            return view('data-pemesanan.index');
        }
    }

    public function detail(){
        return view('data-pemesanan.detail');
    }
}
