<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, SoftDeletes;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get the account associated with the user.
     */
    public function account()
    {
        return $this->hasOne('App\Models\Account');
    }

    /**
     * Since a user can have the role of owner or guest then this
     * will get all bookings associated with the user.
     */
    public function bookings()
    {
        return $this->hasMany('App\Models\Booking');
    }

    /**
     * Get all permissions associated with the user.
     */
    public function permissions()
    {
        return $this->hasManyThrough('App\Models\Permission', 'App\Models\UserPermission');
    }

    /**
     * Get all roles associated with the user.
     */
    public function roles()
    {
        return $this->hasManyThrough('App\Models\Role', 'App\Models\UserRole');
    }
}
