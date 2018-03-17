<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use SoftDeletes;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     *
     */
    protected $table = 'accounts';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get the amenities associated with the account.
     */
    public function amenities()
    {
        return $this->hasMany('App\Models\Amenity');
    }

    /**
     * Get the fees associated with the account.
     */
    public function fees()
    {
        return $this->hasMany('App\Models\Fee');
    }

    /**
     * Get the rates associated with the account.
     */
    public function properties()
    {
        return $this->hasMany('App\Models\Property');
    }

    /**
     * Get the rates associated with the account.
     */
    public function rates()
    {
        return $this->hasMany('App\Models\Rate');
    }

    /**
     * Get the users associated with the account.
     */
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
