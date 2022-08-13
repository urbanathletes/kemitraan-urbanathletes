<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMember extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'member_id',
        'rfid_card_code',
        'email',
        'branch_id',
        'id_card',
        'membership_status_id',
    ];
}
