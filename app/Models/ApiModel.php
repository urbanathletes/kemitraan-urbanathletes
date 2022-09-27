<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class ApiModel extends Model
{
    use HasFactory;

    public function getTimes()
    {
        $time = Http::get(config('app.url_api') . 'fitness/v1/classes_schedule/schedule_new?sorting=time_start&sorting_type=asc');
        return $time;
    }

    public function getScheduleClass($club = NULL)
    {
        // $coba = [];
        // dump(count($coba));
        // if (!$coba) {
        //     dd($coba);
        // }
        // if ($club->studio_id && $club->studio_id !== "NULL") {
        //     $schedule = Http::get( config('app.url_api') . 'fitness/v1/classes_schedule/all?branch=' . $club->branch_id 
        //     )->json('data');
        //     $dataSchedule = [];
        //     foreach ($schedule as $schAry) {
        //         if ($schAry['schedule']) {
        //             foreach ($schAry['schedule'] as $sch ) {
        //                 array_push($dataSchedule ,$sch);
        //             }
        //         }
        //     }
        //     // dd($dataSchedule);
        //     return $dataSchedule;
        // }
        if ($club->branch_id == 'NULL') {
            $schedule = Http::get( config('app.url_api') . 'fitness/v1/classes_schedule/all?branch=' . 
            '&date=' . date(now()) 
            )->json('data');    
        } else {
            $schedule = Http::get( config('app.url_api') . 'fitness/v1/classes_schedule/all?branch=' . $club->branch_id 
            )->json('data');
            if ($club->studio_id && $club->studio_id !== "NULL") {
                $dataSchedule = [];
                foreach ($schedule['rows'] as $schAry) {
                    if ($schAry['studio_id'] == $club->studio_id ) {
                        array_push($dataSchedule, $schAry);
                    }
                }
                // dd($dataSchedule);
                return $dataSchedule;
            }
        }
        return $schedule['rows'];
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
