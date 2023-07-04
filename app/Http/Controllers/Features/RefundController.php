<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\Refund;
use App\Models\Venue;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class RefundController extends Controller{
    public function index(Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            $data = Refund::all();
            if($request->ajax()){
                return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('venue_id', function($row){
                    if($row->id != NULL){
                        $venue_id = Venue::where('id', $row->venue_id)->value('venue_name');
                        return $venue_id;
                    }
                })
                ->addColumn('status', function($row){
                    if($row->id != NULL){
                        if ($row->status == 0) {
                            return "Pending";
                        } elseif ($row->status == 1) {
                            return "In Progress";
                        } elseif ($row->status == 2) {
                            return "Refunded";
                        } elseif ($row->status == 3) {
                            return "Declined";
                        }
                    }
                })
                ->addColumn('action', function ($row){
                    $button = '';
                    if ($row->status == 2 || $row->status == 3) {
                        $button .= "<a style='margin-right: 5px;' class='setuju btn btn-sm btn-info text-white' data-id='".$row['id']."' id='detailBtn' href='".route('detail-refund', [$row->id])."'>Detail</a>";
                    } elseif ($row->status == 1) {
                        $button .= "<button style='margin-right: 5px;' class='setuju btn btn-sm btn-danger text-white' data-id='".$row['id']."' id='rejectBtn'>Tolak</button>";
                        $button .= "<button style='margin-right: 5px;' class='setuju btn btn-sm btn-primary text-white' data-id='".$row['id']."' id='accBtn' >Terima</button>";
                        $button .= "<a style='margin-right: 5px;' class='setuju btn btn-sm btn-info text-white' data-id='".$row['id']."' id='detailBtn' href='".route('detail-refund', [$row->id])."'>Detail</a>";
                    } elseif ($row->status == 0) {
                        $button .= "<button style='margin-right: 5px;' class='setuju btn btn-sm btn-danger text-white' data-id='".$row['id']."' id='rejectBtn'>Tolak</button>";
                        $button .= "<button style='margin-right: 5px;' class='setuju btn btn-sm btn-primary text-white' data-id='".$row['id']."' id='accBtn' >Proses</button>";
                        $button .= "<a style='margin-right: 5px;' class='setuju btn btn-sm btn-info text-white' data-id='".$row['id']."' id='detailBtn' href='".route('detail-refund', [$row->id])."'>Detail</a>";
                    }
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
            }

            return view('pengembalian-dana.index', compact('data'));
        }
    }

    public function detailrefund($id){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            $refund = Refund::where('id', $id)->first();
            return view('pengembalian-dana.detail', compact('refund'));
        }
    }
}
