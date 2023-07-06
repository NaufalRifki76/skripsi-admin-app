<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\RentHours;
use App\Models\RentOrder;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
                    $button = "<a style='margin-right: 5px;' class='setuju btn btn-sm btn-info text-white' data-id='".$row['id']."' id='detailBtn' href='".route('detail-orders', [$row->id])."'>Detail</a>";
                    $button .= "<button class='setuju btn btn-sm btn-danger' data-id='".$row['id']."' id='delBtn'>Hapus</button></div>";
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
            }

            return view('data-pemesanan.index', compact('data'));
        }
    }

    public function detail($id){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else {
            $data = RentOrder::where('id', $id)->first();
            $hours = RentHours::where('order_id', $id)->first();
            
            return view('data-pemesanan.detail', compact('data', 'hours'));
        }
    }

    public function delete(Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else {
            $hours = RentHours::where('order_id', $request->id)->first();
            $data = RentOrder::where('id', $request->id)->first();
            DB::beginTransaction();
            $hours->delete();
            $data->delete();
            DB::commit();

            return redirect()->route('index-orders')->with('success', 'Data berhasil dihapus!');
        }
    }
}
