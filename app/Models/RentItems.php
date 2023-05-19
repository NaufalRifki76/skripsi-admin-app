<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'venue_id',
        'item_name',
        'item_cost_hour'
    ];

    protected $table = 'rent_items';
}
