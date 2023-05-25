<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentHours extends Model
{
    use HasFactory;

    protected $fillable = [
        'venue_id',
        'field_id',
        'order_id',
        'up00',
        'up01',
        'up02',
        'up03',
        'up04',
        'up05',
        'up06',
        'up07',
        'up08',
        'up09',
        'up10',
        'up11',
        'up12',
        'up13',
        'up14',
        'up15',
        'up16',
        'up17',
        'up18',
        'up19',
        'up20',
        'up21',
        'up22',
        'up23'
    ];

    protected $table = 'rent_hours';

    public function rent_hours()
    {
        return $this->belongsTo(Venue::class);
    }
}
