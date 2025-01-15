<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    // Define the table if it's not the plural form of the model name
    protected $table = 'profiles';

    // Mass assignable attributes
    protected $fillable = [
        'user_id',
        'phone',
        'address',
        'city',
        'state',
        'country',
        'postal_code',
        'date_of_birth',
        'profile_image',
        'bio'
    ];
}
