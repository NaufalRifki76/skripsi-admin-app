<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'cust_name',
        'venue_id',
        'venue_name',
        'cust_number',
        'cust_email',
        'field',
        'order_date',
        'price_sum',
        'confirmation',
    ];

    protected $table = 'rent_order';

    public function rent_order()
    {
        return $this->belongsTo(User::class);
    }
}
