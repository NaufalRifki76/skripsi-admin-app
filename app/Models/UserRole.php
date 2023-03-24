<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Model\User;

class UserRole extends Model
{
    protected $fillable = [
            'role_id'
    ];

    protected $table = 'role_users';

    public function role(){
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
