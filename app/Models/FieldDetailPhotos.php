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

    protected $table = 'photos_field_detail';

    public function photo_field_detail()
    {
        return $this->belongsTo(FieldDetail::class);
    }
}
