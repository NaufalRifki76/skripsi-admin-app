<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_name',
        'field_name',
        'field_address',
        'field_type',
        'booking_cost',
        'facilities',
        'owner_email',
    ];
    
    protected $table = 'field_owner';
}
