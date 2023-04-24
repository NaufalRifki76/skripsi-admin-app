<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TournamentPhotos extends Model
{
    use HasFactory;

    protected $fillable = [
        'tournament_photo_base64'
    ];

    protected $table = 'photos_tournament';

    public function user()
    {
        return $this->belongsTo(Tournament::class);
    }
}
