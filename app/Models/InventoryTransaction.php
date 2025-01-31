<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryTransaction extends Model
{
    protected $fillable = ['quantity', 'type', 'notes', 'user_id'];
    
    public function item()
    {
        return $this->belongsTo(InventoryItem::class);
    }
}
