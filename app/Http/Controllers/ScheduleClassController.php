<?php

namespace App\Http\Controllers;

use App\Models\ApiModel;
use Illuminate\Http\Request;

class ScheduleClassController extends Controller
{
    public function timetable()
    {
        $apiModel = new ApiModel();
        // dd($apiModel->getScheduleClass()['rows']);
        // return view("public/static/timetable");
        return view("public/static/timetable_tes", ['classes' => $apiModel->getScheduleClass()['rows']]);
    }
}
