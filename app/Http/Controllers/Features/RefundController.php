<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\FieldDetail;
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
                ->addColumn('confirmation', function($row){
                    if($row->id != NULL){
                        if ($row->confirmation == 0) {
                            return "Pending";
                        } elseif ($row->confirmation == 1) {
                            return "Dalam Proses";
                        } elseif ($row->confirmation == 2) {
                            return "Diterima";
                        } elseif ($row->confirmation == 3) {
                            return "Ditolak";
                        }
                    }
                })
                ->addColumn('action', function ($row){
                    $button = '';
                    if ($row->confirmation == 2 || $row->confirmation == 3) {
                        $button .= "<a style='margin-right: 5px;' class='setuju btn btn-sm btn-info text-white' data-id='".$row['id']."' id='detailBtn' href='".route('detail-refund', [$row->id])."'>Detail</a>";
                    } elseif ($row->confirmation == 1) {
                        $button .= "<button style='margin-right: 5px;' class='setuju btn btn-sm btn-danger text-white' data-id='".$row['id']."' id='rejectBtn'>Tolak</button>";
                        $button .= "<button style='margin-right: 5px;' class='setuju btn btn-sm btn-primary text-white' data-id='".$row['id']."' id='accBtn' >Terima</button>";
                        $button .= "<a style='margin-right: 5px;' class='setuju btn btn-sm btn-info text-white' data-id='".$row['id']."' id='detailBtn' href='".route('detail-refund', [$row->id])."'>Detail</a>";
                    } elseif ($row->confirmation == 0) {
                        $button .= "<button style='margin-right: 5px;' class='setuju btn btn-sm btn-danger text-white' data-id='".$row['id']."' id='rejectBtn'>Tolak</button>";
                        $button .= "<button style='margin-right: 5px;' class='setuju btn btn-sm btn-primary text-white' data-id='".$row['id']."' id='procBtn' >Proses</button>";
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

    public function denyrefund(Request $request){
        $refund = Refund::where('id', $request->id)->first();
        $refund->confirmation = 3;
        $refund->save();
        return redirect()->route('index-refund')->with('success', 'Data pengembalian dana ditolak!');
    }

    public function processrefund(Request $request){
        $refund = Refund::where('id', $request->id)->first();
        $refund->confirmation = 1;
        $refund->save();
        return redirect()->route('index-refund')->with('success', 'Data sedang diproses!');
    }

    public function accrefund(Request $request){
        $refund = Refund::where('id', $request->id)->first();
        $refund->confirmation = 2;
        $refund->save();
        return redirect()->route('index-refund')->with('success', 'Data telah disetujui!');
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
