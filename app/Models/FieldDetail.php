<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'field_name',
        'field_cost_hour'
    ];

    protected $table = 'field_detail';

    public function field_detail()
    {
        return $this->belongsTo(Venue::class);
    }

    public function field_base64()
    {
        return $this->hasOne(FieldDetailPhotos::class);
    }
}
