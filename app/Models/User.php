<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Cache;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable ;
    protected $guarded=[];

    public function setUsernameAttribute($value)
    {
        $this->attributes['username'] = strtolower($value);
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }


    public function hasPermission($key)
    {
        return $this->role->permission->contains('key', $key);
    }

    public function isOnline(){
        return Cache::has('user-is-online' .$this->id);
    }

}
