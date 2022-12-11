<?php

namespace App\Http\Controllers;

use App\Models\ApiModel;
use Illuminate\Http\Request;

class ScheduleClassController extends Controller
{
    public function timetable()
    {
        $apiModel = new ApiModel();
        $clubs = $apiModel->allClubs()['rows'];
        return view("public/static/timetable", ['clubs' => $clubs]);
    }

    public function timetableSelect(Request $request)
    {
        // dd($request->studio_id);
        $apiModel = new ApiModel();
        // https://api.urbanathletes.co.id/fitness/v1/classes_schedule/schedule_new?sorting=time_start&sorting_type=asc
        $times = $apiModel->getTimes();
        $classes = $apiModel->getScheduleClass($request);
        if ($request->branch_id == NULL || $request->branch_id == 'NULL') {
            return view("public/static/timetable-dateNow", ['classes' => $classes]);
        } else {
            return view("public/static/timetable-select", ['classes' => $classes, 'times' => $times]);
        }
        // return view("public/static/timetable_backup");
        
    }
}
