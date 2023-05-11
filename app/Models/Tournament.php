<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = [
        'tournament_name',
        'tournament_address',
        'start_date',
        'end_date',
        'tournament_detail',
        'entry_fee',
        'education_category',
        'age_category',
        'registration_start',
        'registration_end',
        'team_pool',
        'contact_person'
    ];

    protected $table = 'tournaments';

    public function tournament_base64()
    {
        return $this->hasOne(TournamentPhotos::class);
    }
}
