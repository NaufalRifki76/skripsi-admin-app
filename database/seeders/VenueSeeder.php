<?php

namespace Database\Seeders;

use App\Models\Venue;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VenueSeeder extends Seeder
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
                    'venue_name'    => 'Muhammad Caisar',
                    'venue_address' => 'Jl. Roma 4',
                    'open_hour'     => Carbon::createFromTimeString('10:00:00'),
                    'close_hour'    => Carbon::createFromTimeString('20:00:00'),
                    'venue_desc'    => 'Kururin',
                ]
            ];

            Venue::insert($field);
    }
}
