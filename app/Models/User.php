<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends EloquentUser
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'no_telephone',
        'password',
        'vip_status',
        'successful_transaction'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user_role(){
        return $this->hasOne(UserRole::class, 'user_id', 'id');
    }

    public function user_venue(){
        return $this->hasOne(Venue::class, 'user_id', 'id');
    }

    public function rent_order(){
        return $this->hasMany(RentOrder::class, 'user_id', 'id');
    }

    public function refund(){
        return $this->hasMany(Refund::class, 'user_id', 'id');
    }

    public function tournament(){
        return $this->hasMany(Tournament::class);
    }
}
