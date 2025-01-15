<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RestaurantProfile extends Model
{
    use HasFactory;

    // Define fillable attributes
    protected $fillable = [
        'user_id',
        'restaurant_name',
        'restaurant_logo',
        'restaurant_description',
        'restaurant_phone',
        'restaurant_email',
        'restaurant_address',
        'restaurant_city',
        'restaurant_state',
        'restaurant_country',
        'restaurant_postal_code',
        'opening_days',
        'opening_time',
        'closing_time',
        'cuisine_type',
        'is_vegetarian',
        'seating_capacity',
        'accepts_online_orders',
        'offers_takeaway',
        'has_parking',
    ];
}
