<?php

namespace Database\Seeders;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Sentinel::getRoleRepository()->createModel()->create([
            'name'          => 'Root Admin',
            'slug'          => 'root_admin',
            "permissions"   => [    
            ]
        ]);

        $roles = Sentinel::getRoleRepository()->createModel()->create([
            'name'          => 'User',
            'slug'          => 'user',
            "permissions"   => [    
            ]
        ]);
    }
}
