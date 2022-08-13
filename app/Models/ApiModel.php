<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class ApiModel extends Model
{
    use HasFactory;

    public function getScheduleClass()
    {
        // $schedule = Http::get( config('app.url_api') . 'fitness/v1/classes_schedule/all')->json('data');
        $schedule = Http::get( config('app.url_api') . 'fitness/v1/classes_schedule/all?branch=&date=' . date(now()))->json('data');
        return $schedule;
    }

    public function cekMember($rfid)
    {
//         $data = ['rfid_card_code' => $rfid];
//         $memberCek = Http::post( config('app.url_api') . 'fitness/v1/scanning/gym_attendance', $data)->json();
        return $rfid;
    }
}
