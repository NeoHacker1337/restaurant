<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryAlert extends Model
{
    protected $fillable = ['message', 'resolved'];

    public function item()
    {
        return $this->belongsTo(InventoryItem::class);
    }
}
