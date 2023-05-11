<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VenueRentItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_qty',
        'item_rent_cost'
    ];

    protected $table = 'venue_rent_items';

    public function venue_rent_item()
    {
        return $this->belongsTo(Venue::class);
    }
}
