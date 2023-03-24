<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cartalyst\Sentinel\Roles\EloquentRole;
use App\Models\UserRole;

class Role extends EloquentRole
{
    use HasFactory;
    
    protected $fillable = [
        'slug',
        'name',
    ];

    protected $table = 'roles';

    public function user_role()
    {
        return $this->hasMany(UserRole::class, 'role_id');
    }
}
