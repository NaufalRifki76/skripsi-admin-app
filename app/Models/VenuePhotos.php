<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VenuePhotos extends Model
{
    use HasFactory;

    protected $fillable = [
        'venue_photo_base64'
    ];

    protected $table = 'photos_venue';

    public function fieldphoto()
    {
        return $this->belongsTo(Venue::class);
    }
}
