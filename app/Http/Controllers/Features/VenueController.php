<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\Venue;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VenueController extends Controller{
    public function index(Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            $data = Venue::where('isapproved', 1)->get();
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
                ->addColumn('action', function ($row){
                    $button = "<a style='margin-right: 5px;' class='setuju btn btn-sm  btn-warning text-white' data-id='".$row['id']."' id='accBtn' href=''>Edit</a>";
                    $button .= "<a style='margin-right: 5px;' class='setuju btn btn-sm  btn-danger text-white' data-id='".$row['id']."' id='denyBtn' href=''>Delete</a>";
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
            }

            return view('lapangan.index', compact('data'));
        }
    }

    public function createhours(){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            $venue = Venue::where('isapproved', 1)->get();
            return view('lapangan.jam-operasional', compact('venue'));
        }
    }

    public function storehours(Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            try {
                $request->validate([
                    'venue_id' => 'required',
                    'up00'     => 'nullable',
                    'up01'     => 'nullable',
                    'up02'     => 'nullable',
                    'up03'     => 'nullable',
                    'up04'     => 'nullable',
                    'up05'     => 'nullable',
                    'up06'     => 'nullable',
                    'up07'     => 'nullable',
                    'up08'     => 'nullable',
                    'up09'     => 'nullable',
                    'up10'     => 'nullable',
                    'up11'     => 'nullable',
                    'up12'     => 'nullable',
                    'up13'     => 'nullable',
                    'up14'     => 'nullable',
                    'up15'     => 'nullable',
                    'up16'     => 'nullable',
                    'up17'     => 'nullable',
                    'up18'     => 'nullable',
                    'up19'     => 'nullable',
                    'up20'     => 'nullable',
                    'up21'     => 'nullable',
                    'up22'     => 'nullable',
                    'up23'     => 'nullable',
                ]);

                // dd($request->up00);

                $venue = Venue::where('id', $request->venue_id)->first();
                DB::beginTransaction();
                
                $hours = $venue->rent_hours_available()->create([
                    'up00' => $request->up00,
                    'up01' => $request->up01,
                    'up02' => $request->up02,
                    'up03' => $request->up03,
                    'up04' => $request->up04,
                    'up05' => $request->up05,
                    'up06' => $request->up06,
                    'up07' => $request->up07,
                    'up08' => $request->up08,
                    'up09' => $request->up09,
                    'up10' => $request->up10,
                    'up11' => $request->up11,
                    'up12' => $request->up12,
                    'up13' => $request->up13,
                    'up14' => $request->up14,
                    'up15' => $request->up15,
                    'up16' => $request->up16,
                    'up17' => $request->up17,
                    'up18' => $request->up18,
                    'up19' => $request->up19,
                    'up20' => $request->up20,
                    'up21' => $request->up21,
                    'up22' => $request->up22,
                    'up23' => $request->up23,
                ]);

                DB::commit();
                return redirect()->route('index-venue')->with('success', 'Jam opersaional berhasil ditambahkan!');
            } catch (\Throwable $th) {
                dd($th);
                DB::rollBack();
                return back()->with('failed', 'Cek kelengkapan dari form anda!');
            }
        }
    }
}
