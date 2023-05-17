<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\FieldDetail;
use App\Models\Venue;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class MitraController extends Controller{
    public function view(){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            return view('persetujuan-mitra.index');
        }
    }

    public function index(Request $request){
        $data = Venue::all();
        if($request->ajax()){
            return datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('field_qty', function($row){
                if($row->id != NULL){
                    return $row->field_detail->count();
                }
            })
            ->addColumn('starting_fee', function($row){
                if($row->id != NULL){
                    return $row->field_detail->min('field_cost_hour');
                }
            })
            ->addColumn('status', function($row){
                if($row->id != NULL){
                    if ($row->isapproved == 0) {
                        return "Pending";
                    } elseif ($row->isapproved == 1) {
                        return "Approved";
                    } elseif ($row->isapproved == 2) {
                        return "Ditolak";
                    }
                }
            })
            ->addColumn('action', function ($row){
                $button = "<div class='d-flex'><a style='margin-right: 5px;' class='setuju btn btn-sm  btn-danger text-white' data-id='".$row['id']."' id='accBtn' href='".route('deny-mitra', [$row->id])."'>Tolak</a>";
                $button .= "<div class='d-flex'><a style='margin-right: 5px;' class='setuju btn btn-sm  btn-success text-white' data-id='".$row['id']."' id='denyBtn' href='".route('acc-mitra', [$row->id])."'>Terima</a>";
                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }

    /*
    Status Approval Venue
    0 = Pending
    1 = Approved
    2 = Denied
    */

    public function accmitra($id){
        $mitra = Venue::where('id', $id)->first();
        $mitra->isapproved = 1;
        $mitra->save();
        return redirect()->route('index-view');
    }

    public function denymitra($id){
        $mitra = Venue::where('id', $id)->first();
        $mitra->isapproved = 2;
        $mitra->save();
        return redirect()->route('index-view');
    }
}
