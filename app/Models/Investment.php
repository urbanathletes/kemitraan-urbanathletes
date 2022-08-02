<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_inves',
        'first_name',
        'last_name',
        'email',
        'phone',
        'country',
        'city',
        'company',
        'job',
        'industry',
    ];
}
