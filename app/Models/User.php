<?php

namespace App\Models;

use App\Traits\Followable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'avatar',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
    * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
        $email = $this->attributes['email'];
        return $value ? asset('storage/'. $value) : "https://i.pravatar.cc/150?u=". $email;
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function timeline()
    {
        $ids = $this->follows()->pluck('users.id');
        $ids->push($this->id);

        return Tweet::whereIn('user_id', $ids)->latest()->get();
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class)->latest();
    }

    public function path($append = '')
    {
        $path = route('profile', $this->id);

        return $append ? "{$path}/{$append}" : $path;
    }
}
