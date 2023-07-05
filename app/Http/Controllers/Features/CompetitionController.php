<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\Tournament;
use App\Models\TournamentPhotos;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CompetitionController extends Controller{
    public function sekolah(Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            $data = Tournament::where('age_category', null)->get();
            if($request->ajax()){
                return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('registration_start', function ($row){
                    return Carbon::parse($row->registration_start)->format('d-m-Y');
                })
                ->addColumn('start_date', function ($row){
                    return Carbon::parse($row->start_date)->format('d-m-Y');
                })
                ->addColumn('action', function ($row){
                    $button = "<div class='d-flex'><a style='margin-right: 5px;' class='setuju btn btn-sm  btn-warning text-white' data-id='".$row['id']."' id='editBtn' href='edit.sekolah'>Edit</a>";
                    $button .= "<button class='setuju btn btn-sm btn-danger' data-id='".$row['id']."' id='delBtn'>Hapus</button></div>";
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
            }
            return view('pengembangan-bakat.kompetisi-sekolah', compact('data'));
        }
    }

    public function addsekolah(){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            return view('pengembangan-bakat.tambah-komsekolah');
        }
    }

    public function umur(Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            $data = Tournament::where('education_category', null)->get();
            if($request->ajax()){
                return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('registration_start', function ($row){
                    return Carbon::parse($row->registration_start)->format('d-m-Y');
                })
                ->addColumn('start_date', function ($row){
                    return Carbon::parse($row->start_date)->format('d-m-Y');
                })
                ->addColumn('action', function ($row){
                    $button = "<div class='d-flex'><a style='margin-right: 5px;' class='setuju btn btn-sm text-white btn-warning' data-id='".$row['id']."' id='editBtn' href='edit.umur'>Edit</a>";
                    $button .= "<button class='setuju btn btn-sm btn-danger' data-id='".$row['id']."' id='delBtn'>Hapus</button></div>";
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
            }
            return view('pengembangan-bakat.kompetisi-umur', compact('data'));
        }
    }

    public function addumur(){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            return view('pengembangan-bakat.tambah-komumur');
        }
    }

    public function store(Request $request){
        if (!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else {
            $request->validate([
                'tournament_name'           => 'required',
                'entry_fee'                 => 'required',
                'registration_start'        => 'required',
                'registration_end'          => 'required',
                'team_pool'                 => 'nullable',
                'tournament_address'        => 'required',
                'tournament_photo_base64'   => 'nullable',
                'age_category'              => 'nullable',
                'education_category'        => 'nullable',
                'start_date'                => 'required',
                'end_date'                  => 'required',
                'contact_person'            => 'required',
                'tournament_detail'         => 'nullable',
            ]);
            // dd($request->tournament_photo_base64);

            DB::beginTransaction();
            try {
                $tournament = new Tournament();
                $tournament->tournament_name    = $request->tournament_name;
                $tournament->entry_fee          = $request->entry_fee;
                $tournament->registration_start = $request->registration_start;
                $tournament->registration_end   = $request->registration_end;
                $tournament->team_pool          = $request->team_pool;
                $tournament->tournament_address = $request->tournament_address;
                $tournament->age_category       = $request->age_category;
                $tournament->education_category = $request->education_category;
                $tournament->start_date         = $request->start_date;
                $tournament->end_date           = $request->end_date;
                $tournament->contact_person     = $request->contact_person;
                $tournament->tournament_detail  = $request->tournament_detail;
                $tournament->save();

                $imageFile = $request->tournament_photo_base64;
                $tournamentBase64 = base64_encode(file_get_contents($imageFile));

                $tournament_photo = $tournament->tournament_base64()->create([
                    'tournament_photo_base64' => $tournamentBase64,
                ]);

                DB::commit();
                if ($request->age_category != null) {
                    return redirect()->route('tournament.umur');
                } else {
                    return redirect()->route('tournament.sekolah');
                }
                
                return redirect()->route('dashboard.index');
            } catch (\Throwable $th) {
                DB::rollBack();
                dd($th);
                abort(404, 'Oops!');
            }
        }
    }

    public function editsekolah(){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            return view('pengembangan-bakat.edit-komsekolah');
        }
    }

    public function editumur(){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            return view('pengembangan-bakat.edit-komumur');
        }
    }

    public function deletesekolah(Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            $photo = TournamentPhotos::where('tournament_id', $request->id)->first();
            $data = Tournament::where('id', $request->id)->first();
            DB::beginTransaction();
            $photo->delete();
            $data->delete();
            DB::commit();

            return redirect()->route('tournament.sekolah');
        }
    }

    public function deleteumur(Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            $photo = TournamentPhotos::where('tournament_id', $request->id)->first();
            $data = Tournament::where('id', $request->id)->first();
            DB::beginTransaction();
            $photo->delete();
            $data->delete();
            DB::commit();

            return redirect()->route('tournament.umur');
        }
    }
}