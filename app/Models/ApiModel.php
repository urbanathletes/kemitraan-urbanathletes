<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class ApiModel extends Model
{
    use HasFactory;

    public function getScheduleClass($club = NULL)
    {
        if ($club == 'NULL') {
            $schedule = Http::get( config('app.url_api') . 'fitness/v1/classes_schedule/all?branch=' . 
            '&date=' . date(now()) 
            )->json('data');    
        } else {
            $schedule = Http::get( config('app.url_api') . 'fitness/v1/classes_schedule/all?branch=' . $club 
            )->json('data');
        }
        
        // dd($request);
        // $schedule = Http::get( config('app.url_api') . 'fitness/v1/classes_schedule/all')->json('data');
        
        return $schedule;
    }

    public function cekMember($req, $metot = 'get')
    {
        // dd($req);
        if ($metot == 'post') {
            $data = [
                'rfid_card_code' => $req->rfid,
                'branch_id' => $req->branch_id
            ];
            $memberCek = Http::post( config('app.url_api') . 'fitness/v1/scanning/gym_attendance', $data)->json();
        } else {
            $memberCek = Http::get( config('app.url_api') . 'fitness/v1/scanning/member_schedule/' . $req->rfid)->json();
        }
        // dump($memberCek);
        
        return $memberCek;
    }

    public function allClubs($id = NULL)
    {
        if ($id === NULL) {
            $clubs = Http::get( config('app.url_api') . 'fitness/v1/branch')->json('data');
            return $clubs;
        } else {
            $clubs = Http::get( config('app.url_api') . 'fitness/v1/branch/' . $id)->json('data');
            return $clubs;   
        }
        
    }
}
