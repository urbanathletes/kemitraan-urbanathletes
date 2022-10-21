<?php

namespace App\Http\Controllers;

use App\Models\ApiWebModel;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function Trainer()
    {
        // $data = new ApiWebModel();
        // dd($data->getTrainer());
        
        return view("public/static/trainer");
    }
}
