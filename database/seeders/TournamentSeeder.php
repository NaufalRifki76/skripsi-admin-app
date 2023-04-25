<?php

namespace Database\Seeders;

use App\Models\Tournament;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Tournament::count() > 0){
            $date1 = Carbon::create(2024, 4, 25, 10, 00, 0);
            $date2 = Carbon::create(2024, 5, 1, 15, 30, 0);

            $tournament = [
                [
                    'tournament_name'       => 'Jambalaya Cup',
                    'tournament_address'    => 'Jl. Sambal Jaya 2',
                    'start_date'            => $date1,
                    'end_date'              => $date2,
                    'tournament_detail'     => 'Sambal berjaya cup',
                    'min_education'         => 'SMA',
                    'max_education'         => 'S3',
                    'min_age'               => '19',
                    'max_age'               => '30',
                ]
            ];

            Tournament::insert($tournament);
        }
    }
}
