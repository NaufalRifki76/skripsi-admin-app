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
        'min_education',
        'max_education',
        'min_age',
        'max_age',
    ];

    protected $table = 'tournaments';

    public function photo_base64()
    {
        return $this->hasOne(TournamentPhotos::class);
    }
}
