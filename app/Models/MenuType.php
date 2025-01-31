<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuType extends Model
{
    use HasFactory;

    protected $table = 'menu_types';

    protected $fillable = ['name', 'start_time', 'end_time','created_by'];
    
    protected function casts(): array
    {
        return [
            'start_time' => 'datetime:H:i',
            'end_time' => 'datetime:H:i',
        ];
    }
    
    public function menuItems()
    {
        return $this->hasMany(MenuItem::class);
    }
}
