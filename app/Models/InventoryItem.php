<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    protected $fillable = [
        'name', 'category_id', 'current_stock', 
        'minimum_stock', 'unit', 'supplier', 'last_restocked'
    ];

    public function category()
    {
        return $this->belongsTo(InventoryCategory::class);
    }

    public function transactions()
    {
        return $this->hasMany(InventoryTransaction::class);
    }

    public function alerts()
    {
        return $this->hasMany(InventoryAlert::class);
    }
}
