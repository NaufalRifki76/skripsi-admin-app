<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    protected $fillable = [
        'venue_name',
        'venue_address',
        'open_hour',
        'close_hour',
        'venue_desc',
        'bank',
        'bank_acc_no',
        'bank_acc_name',
        'drinks',
        'locker_room',
        'toilet',
        'parking_space',
        'wifi',
        'rent_equipments',
        'isapproved',
        'isdeleted'
    ];
    
    protected $table = 'venue';

    public function venue_base64()
    {
        return $this->hasOne(VenuePhotos::class);
    }

    public function field_detail()
    {
        return $this->hasMany(FieldDetail::class);
    }

    public function venue_rent_item()
    {
        return $this->hasMany(VenueRentItems::class);
    }

    public function rent_hours()
    {
        return $this->hasMany(RentHours::class);
    }

    public function rent_hours_available()
    {
        return $this->hasOne(RentHoursAvailable::class);
    }

    public function refund()
    {
        return $this->hasMany(Refund::class);
    }

    public function user_venue()
    {
        return $this->belongsTo(User::class);
    }
}
