<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FAQController extends Controller{
    public function index(Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            $data = FAQ::all();
            if($request->ajax()){
                return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row){
                    $button = "<button class='setuju btn btn-sm  btn-danger text-white' data-id='".$row['id']."' id='deleteBtn'>Hapus</button></div>";
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
            }
            return view('faq.index', compact('data'));
        }
    }

    public function create(){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            return view('faq.tambah');
        }
    }

    public function store(Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else{
            $request->validate([
                'question'  => 'required',
                'answer'    => 'required',
            ]);

            DB::beginTransaction();
            try {
                $faq = new FAQ();
                $faq->question  = $request->question;
                $faq->answer    = $request->answer;
                $faq->save();

                DB::commit();
                return redirect()->route('index-faq');
            } catch (\Throwable $th) {
                DB::rollBack();
                dd($th);
                abort(404, 'Oops!');
            }
        }
    }
}
