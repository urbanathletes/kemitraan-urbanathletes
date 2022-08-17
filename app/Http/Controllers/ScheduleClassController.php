<?php

namespace App\Http\Controllers;

use App\Models\ApiModel;
use Illuminate\Http\Request;

class ScheduleClassController extends Controller
{
    public function timetable()
    {
        $apiModel = new ApiModel();
        // $classes = $apiModel->getScheduleClass()['rows'];
        $clubs = $apiModel->allClubs()['rows'];
        // dd($apiModel->getScheduleClass()['rows']);
        // return view("public/static/timetable");
        // dd($clubs);
        return view("public/static/timetable", ['clubs' => $clubs]);
        // return view("public/static/timetable-select", ['classes' => $apiModel->getScheduleClass()['rows']]);
    }

    public function timetableSelect($id = NULL)
    {
        $apiModel = new ApiModel();
        $classes = $apiModel->getScheduleClass($id)['rows'];
        if ($id == NULL || $id == 'NULL') {
            return view("public/static/timetable-dateNow", ['classes' => $classes]);
        } else {
            return view("public/static/timetable-select", ['classes' => $classes]);
        }
        
    }
}
