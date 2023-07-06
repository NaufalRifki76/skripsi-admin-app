<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller{
    public function index(Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else {
            $data = User::all();
            if($request->ajax()){
                return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('role', function($row){
                    $roleName = DB::table('users')
                    ->join('role_users', 'users.id', '=', 'role_users.user_id')
                    ->join('roles', 'role_users.role_id', '=', 'roles.id')
                    ->where('users.id', $row->id)
                    ->value('roles.name');
                    return $roleName;
                })
                ->addColumn('vip_status', function($row){
                    if($row->id != NULL){
                        if ($row->vip_status == 0) {
                            return "Akun Biasa";
                        } elseif ($row->vip_status == 1) {
                            return "VIP";
                        } 
                    }
                })
                ->addColumn('action', function ($row){
                    $button = "<a style='margin-right: 5px;' class='setuju btn btn-sm btn-info text-white' data-id='".$row['id']."' id='editBtn' href='".route('edit-user', [$row->id])."'>Edit</a>";
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
            }

            return view('data-user.index', compact('data'));
        }
    }

    public function edit($id){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else {
            $data = User::where('id', $id)->first();
            $role = Role::all();
            return view('data-user.edit', compact('data', 'role', 'id'));
        }
    }

    public function editstore(Request $request, $id){
        if(!Sentinel::getUser()) {
            return redirect()->route('login.index');
        } else {
            $request->validate([
                'name'          => 'required',
                'email'         => 'required',
                'no_telephone'  => 'required',
                'role_user'     => 'required',
                'vip_status'    => 'required',
            ]);

            DB::beginTransaction();
            try {
                $user = User::where('id', $id)->first();
                $user->name         = $request->name;
                $user->email        = $request->email;
                $user->no_telephone = $request->no_telephone;
                $user->vip_status   = $request->vip_status;
                $user->save();

                $role = Sentinel::findRoleById($request->role_user);
                DB::table('role_users')->where('user_id', $id)->delete();
                $role->users()->attach($user);

                DB::commit();
                return redirect()->route('index-user')->with('success', 'Data user "'.$user->name.'" berhasil diedit!');
            } catch (\Exception $th) {
                DB::rollBack();
                dd($th);
                abort(404, 'Oops!');
            }
        }
    }
}
