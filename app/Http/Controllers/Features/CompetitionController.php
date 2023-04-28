<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\Tournament;
use App\Models\TournamentPhotos;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompetitionController extends Controller{
    public function sekolah(Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            $data = Tournament::where('age_category', null);
            if($request->ajax()){
                return datatables()->of($data)
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
            }
            return view('pengembangan-bakat.kompetisi-sekolah');
        }
    }

    public function addsekolah(){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            return view('pengembangan-bakat.tambah-komsekolah');
        }
    }

    public function umur(){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            return view('pengembangan-bakat.kompetisi-umur');
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
                // $imageData = file_get_contents($imageFile->getRealPath());
                $tournamentBase64 = base64_encode($imageFile);

                $tournament_photo = $tournament->photo_base64()->create([
                    'tournament_photo_base64' => $tournamentBase64,
                ]);

                DB::commit();
                return redirect()->route('dashboard.index');
            } catch (\Throwable $th) {
                DB::rollBack();
                dd($th);
                abort(404, 'Oops!');
            }
        }
    }
}