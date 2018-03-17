<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
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
    protected $table = 'properties';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get all bookings associated with the property.
     */
    public function bookings()
    {
        return $this->hasMany('App\Models\Booking');
    }

    /**
     * Get all amenities associated with the property.
     */
    public function amenities()
    {
        return $this->hasManyThrough('App\Models\Amenity', 'App\Models\PropertyAmenity');
    }

    /**
     * Get all fees associated with the property.
     */
    public function fees()
    {
        return $this->hasManyThrough('App\Models\Fee', 'App\Models\PropertyFee');
    }

    /**
     * Get all images associated with the property.
     */
    public function images()
    {
        return $this->hasMany('App\Models\PropertyImage');
    }

    /**
     * Get all promos associated with the property.
     */
    public function promos()
    {
        return $this->hasManyThrough('App\Models\Promo', 'App\Models\PropertyPromo');
    }

    /**
     * Get all rates associated with the property.
     */
    public function rates()
    {
        return $this->hasManyThrough('App\Models\Rate', 'App\Models\PropertyRate');
    }
}
