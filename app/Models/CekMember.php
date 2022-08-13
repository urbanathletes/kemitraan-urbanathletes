<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CekMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'rfid_card_code',
        'cek_in',
        'cek_out',
    ];
}
