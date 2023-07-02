<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefundHours extends Model
{
    use HasFactory;

    protected $fillable = [
        'refund_id',
        'hours_initial'
    ];

    protected $table = 'refund_hours';

    public function refund_hours()
    {
        return $this->belongsTo(Refund::class);
    }
}
