<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modifier extends Model
{
    protected $fillable = ['name', 'price', 'created_by'];

    public function menuItems()
    {
        return $this->belongsToMany(MenuItem::class);
    }
     
}
