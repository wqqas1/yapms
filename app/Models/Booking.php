<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
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
    protected $table = 'bookings';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get all fees associated with the booking
     */
    public function fees()
    {
        return $this->hasManyThrough('App\Models\Fee', 'App\Models\BookingFee');
    }

    /**
     * Get all promos associated with the booking
     */
    public function promos()
    {
        return $this->hasManyThrough('App\Models\Promo', 'App\Models\BookingPromo');
    }

    /**
     * Get all taxes associated with the booking
     */
    public function taxes()
    {
        return $this->hasManyThrough('App\Model\Tax', 'App\Models\BookingTax');
    }

    /**
     * Get the total associated with the booking.
     */
    public function total()
    {
        return $this->hasOne('App\Models\BookingTotal');
    }

    /**
     * Get all transactions associated with the booking.
     */
    public function transactions()
    {
        return $this->hasMany('App\Models\BookingTransaction');
    }
}
