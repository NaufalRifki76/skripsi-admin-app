<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldPhotos extends Model
{
    use HasFactory;

    protected $fillable = [
        'field_photo_base64'
    ];

    protected $table = 'photos_tournament';

    public function fieldphoto()
    {
        return $this->belongsTo(Field::class);
    }
}
