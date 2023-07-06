<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\RentHours;
use App\Models\RentHoursAvailable;
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
                ->addColumn('isdeleted', function($row){
                    if($row->id != NULL){
                        if ($row->isdeleted == 0) {
                            return "Aktif";
                        } elseif ($row->isdeleted == 1) {
                            return "Tidak Aktif";
                        }
                    }
                })
                ->addColumn('action', function ($row){
                    $button = "<a style='margin-right: 5px;' class='setuju btn btn-sm  btn-warning text-white' data-id='".$row['acc-id']."' id='accBtn' href='".route('edit-venue', [$row->id])."'>Edit</a>";
                    $button .= "<button style='margin-right: 5px;' class='setuju btn btn-sm  btn-danger text-white' data-id='".$row['id']."' id='deleteBtn'>Delete</button>";
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

    public function edit($id){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else {
            $data = Venue::where('id', $id)->first();
            $hours = RentHoursAvailable::where('venue_id', $id)->first();

            return view('lapangan.edit', compact('data', 'hours', 'id'));
        }
    }

    public function editstore(Request $request, $id){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else {
            $request->validate([
                'venue_name'            => 'required',
                'venue_photo_base64'    => 'nullable',
                'venue_address'         => 'required',
                'venue_desc'            => 'required',
                'open_hour'             => 'required',
                'close_hour'            => 'required',
                'bank'                  => 'required',
                'bank_acc_no'           => 'required',
                'bank_acc_name'         => 'required',
                'drinks'                => 'nullable',
                'locker_room'           => 'nullable',
                'toilet'                => 'nullable',
                'parking_space'         => 'nullable',
                'wifi'                  => 'nullable',
                'rent_equipments'       => 'nullable',
                'up00'                  => 'nullable',
                'up01'                  => 'nullable',
                'up02'                  => 'nullable',
                'up03'                  => 'nullable',
                'up04'                  => 'nullable',
                'up05'                  => 'nullable',
                'up06'                  => 'nullable',
                'up07'                  => 'nullable',
                'up08'                  => 'nullable',
                'up09'                  => 'nullable',
                'up10'                  => 'nullable',
                'up11'                  => 'nullable',
                'up12'                  => 'nullable',
                'up13'                  => 'nullable',
                'up14'                  => 'nullable',
                'up15'                  => 'nullable',
                'up16'                  => 'nullable',
                'up17'                  => 'nullable',
                'up18'                  => 'nullable',
                'up19'                  => 'nullable',
                'up20'                  => 'nullable',
                'up21'                  => 'nullable',
                'up22'                  => 'nullable',
                'up23'                  => 'nullable',
            ]);

            DB::beginTransaction();
            try {
                $data = Venue::where('id', $id)->first();
                $data->venue_name       = $request->venue_name;
                $data->venue_address    = $request->venue_address;
                $data->venue_desc       = $request->venue_desc;
                $data->open_hour        = $request->open_hour;
                $data->close_hour       = $request->close_hour;
                $data->bank             = $request->bank;
                $data->bank_acc_no      = $request->bank_acc_no;
                $data->bank_acc_name    = $request->bank_acc_name;
                $data->drinks           = $request->drinks;
                $data->locker_room      = $request->locker_room;
                $data->toilet           = $request->toilet;
                $data->parking_space    = $request->parking_space;
                $data->wifi             = $request->wifi;
                $data->rent_equipments  = $request->rent_equipments;
                $data->save();

                $hours = RentHoursAvailable::where('venue_id', $id)->first();
                $hours->up00 = $request->up00;
                $hours->up01 = $request->up01;
                $hours->up02 = $request->up02;
                $hours->up03 = $request->up03;
                $hours->up04 = $request->up04;
                $hours->up05 = $request->up05;
                $hours->up06 = $request->up06;
                $hours->up07 = $request->up07;
                $hours->up08 = $request->up08;
                $hours->up09 = $request->up09;
                $hours->up10 = $request->up10;
                $hours->up11 = $request->up11;
                $hours->up12 = $request->up12;
                $hours->up13 = $request->up13;
                $hours->up14 = $request->up14;
                $hours->up15 = $request->up15;
                $hours->up16 = $request->up16;
                $hours->up17 = $request->up17;
                $hours->up18 = $request->up18;
                $hours->up19 = $request->up19;
                $hours->up20 = $request->up20;
                $hours->up21 = $request->up21;
                $hours->up22 = $request->up22;
                $hours->up23 = $request->up23;
                $hours->save();

                DB::commit();
                return redirect()->route('index-venue')->with('success', 'Data berhasil diedit!');
            } catch (\Throwable $th) {
                DB::rollBack();
                dd($th);
                abort(404, 'Oops!');
            }
        }
    }

    public function delete(Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else {
            $venue = Venue::find($request->id);
            $venue->isdeleted = 1;
            $venue->save();

            return redirect()->route('index-venue')->with('success', 'Data berhasil dihapus!');
        }
    }
}
