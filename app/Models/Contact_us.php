<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_us extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'phone',
        'location',
        'investment',
        'property',
        'property_type',
        // 'Land',
        // 'Shop_Houses',
        // 'a_Building',
        // 'a_shopping_Mall',
        // 'a_club_house',
        // 'Other',
        'large',
        'know',
        'interested',
    ];
}
