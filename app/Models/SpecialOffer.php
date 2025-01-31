<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SpecialOffer extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_item_id',
        'offer_name',
        'discount_percentage',
        'valid_from',
        'valid_to',
        'coupon_code',
        'limit',
        'price_in_type'
    ];

    protected $casts = [
        'valid_from' => 'datetime',
        'valid_to' => 'datetime',
    ];

    public function menuItem()
    {
        return $this->belongsTo(MenuItem::class);
    }
}
