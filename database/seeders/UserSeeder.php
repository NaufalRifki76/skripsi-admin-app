<?php

namespace Database\Seeders;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataroot = [
            'name'          => "Root Admin",
            'email'         => "root@admin.com",
            'password'      => "Password123",
            'no_telephone'  => "087777777777",
            'vip_status'    => "1",
        ];
        $user = Sentinel::registerAndActivate($dataroot);
        $role = Sentinel::findRoleBySlug('root_admin');
        $role->users()->attach($user);
    }
}
