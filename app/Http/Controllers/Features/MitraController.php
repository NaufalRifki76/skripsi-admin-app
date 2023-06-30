<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\FieldDetail;
use App\Models\Role;
use App\Models\User;
use App\Models\Venue;
use App\Models\VenuePhotos;
use App\Models\VenueRentItems;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MitraController extends Controller{
    public function index(Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
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
                    $button = '';
                    if ($row->isapproved == 1 || $row->isapproved == 2) {
                        $button .= "<a style='margin-right: 5px;' class='setuju btn btn-sm btn-info text-white' data-id='".$row['id']."' id='detailBtn' href='".route('detail-show', [$row->id])."'>Detail</a>";
                    } else {
                        $button .= "<button style='margin-right: 5px;' class='setuju btn btn-sm btn-danger text-white' data-id='".$row['id']."' id='rejectBtn'>Tolak</button>";
                        $button .= "<button style='margin-right: 5px;' class='setuju btn btn-sm btn-primary text-white' data-id='".$row['id']."' id='accBtn' >Terima</button>";
                        $button .= "<a style='margin-right: 5px;' class='setuju btn btn-sm btn-info text-white' data-id='".$row['id']."' id='detailBtn' href='".route('detail-show', [$row->id])."'>Detail</a>";
                    }
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
            }

            return view('persetujuan-mitra.index', compact('data'));
        }
    }

    /*
    Status Approval Venue
    0 = Pending
    1 = Approved
    2 = Denied
    */

    public function accmitra(Request $request){
        $mitra = Venue::where('id', $request->id)->first();
        $mitra->isapproved = 1;
        $mitra->save();

        $vendorRole = Role::where('slug', 'vendor')->first();
        $user = User::where('id', $mitra->user_id)->first();
        $user->roles()->detach();
        $user->roles()->attach($vendorRole->id);

        return redirect()->route('index-sewa');
    }

    public function denymitra($id){
        $mitra = Venue::where('id', $id)->first();
        $mitra->isapproved = 2;
        $mitra->save();
        return redirect()->route('index-sewa');
    }

    public function detail($id){
        // $id = id dari venue
        $mitra = Venue::where('id', $id)->first();
        $venue_photo = VenuePhotos::where('venue_id', $id)->first();
        $field_detail = FieldDetail::where('venue_id', $id)->get();
        $rent_items = VenueRentItems::where('venue_id', $id)->get();
        $item_type = DB::table('rent_items')
        ->join('venue_rent_items', 'rent_items.id', '=', 'venue_rent_items.item_id')
        ->join('venue', 'venue_rent_items.venue_id', '=', 'venue.id')
        ->where('venue_id', '=', $id)
        ->pluck('rent_items.item_name')
        ->toArray();
        $field_photo = DB::table('field_detail_photos')
        ->join('field_detail', 'field_detail_photos.field_detail_id', '=', 'field_detail.id')
        ->join('venue', 'field_detail.venue_id', '=', 'venue.id')
        ->where('venue_id', '=', $id)
        ->pluck('field_detail_photos.field_photo_base64')
        ->toArray();
        // dd($field_photo);
        return view('persetujuan-mitra.detail', compact('mitra', 'venue_photo', 'field_detail', 'rent_items', 'field_photo', 'item_type'));
    }
}
