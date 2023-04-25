<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Field::count() > 0) {
            $field = [
                [
                    'owner_name' => 'Muhammad Caisar',
                    'field_name' => 'Caisar Salad',
                    'field_address' => 'Jl. Roma 4',
                    'field_type' => 'Futsal',
                    'booking_cost' => '100000',
                    'field_qty' => '2',
                    'owner_email' => 'caisar@yahoo.com',
                ]
            ];

            Field::insert($field);
        }
    }
}
