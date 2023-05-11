<?php

namespace Database\Seeders;

use App\Models\RentItems;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RentItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $field = [
                [
                    'item_name' => 'Rompi',
                ],
                [
                    'item_name' => 'Sarung tangan',
                ],
                [
                    'item_name' => 'Sepatu futsal',
                ],
                [
                    'item_name' => 'Seragam',
                ],
                [
                    'item_name' => 'Deker',
                ],
            ];

            RentItems::insert($field);
    }
}
