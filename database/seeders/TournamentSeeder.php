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
            $date1 = Carbon::create(2024, 4, 25, 10, 00, 0);
            $date2 = Carbon::create(2024, 5, 1, 15, 30, 0);

            $tournament = [
                [
                    'tournament_name'       => 'Jambalaya Cup',
                    'tournament_address'    => 'Jl. Sambal Jaya 2',
                    'start_date'            => $date1,
                    'end_date'              => $date2,
                    'tournament_detail'     => 'Sambal berjaya cup',
                    'entry_fee'             => 80000,
                    'education_category'    => 'Sekolah Menengah Pertama (SMP)',
                    'registration_start'    => Carbon::create(2024, 5, 10, 10, 00, 0),
                    'registration_end'      => Carbon::create(2024, 5, 20, 10, 00, 0),
                    'team_pool'             => 12,
                    'contact_person'        => '09888898765',
                ]
            ];

            Tournament::insert($tournament);
    }
}
