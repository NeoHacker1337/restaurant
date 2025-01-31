<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'menu_type_id',
        'description',
        'price',
        'image',
        'availability_status',
        'veg_non_veg',  // Ensure this field is included
        'created_by'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function menuType()
    {
        return $this->belongsTo(MenuType::class);
    }

    public function modifiers()
    {
        return $this->belongsToMany(Modifier::class);
    }
}
