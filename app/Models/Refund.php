<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'no_telephone',
        'email',
        'bank',
        'bank_acc_no',
        'bank_acc_name',
        'venue_id',
        'field_detail_id',
        'order_date',
        'price_sum',
        'transfer_confirm_base64'
    ];

    protected $table = 'refund';

    public function refund()
    {
        return $this->belongsTo(User::class);
    }

    public function refund_hours(){
        return $this->hasMany(RefundHours::class, 'refund_id', 'id');
    }
}
