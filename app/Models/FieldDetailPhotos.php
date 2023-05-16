<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldDetailPhotos extends Model
{
    use HasFactory;

    protected $fillable = [
        'field_photo_base64'
    ];

    protected $table = 'field_detail_photos';

    public function field_detail_photos()
    {
        return $this->belongsTo(FieldDetail::class);
    }
}
