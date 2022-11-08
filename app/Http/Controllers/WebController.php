<?php

namespace App\Http\Controllers;

use App\Models\ApiWebModel;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $apiWebModel = new ApiWebModel();
        $data = $apiWebModel->getFotoKelas();
        // $dataPush = [];
        // for ($i=0; $i < 10; $i++) { 
        //     foreach ($data as $row ) {
        //         array_push($dataPush, $row);
        //     }
        // }
        return view("public/index", ['fotoKelas' => array_reverse($data)]);
    }

    public function Trainer()
    {
        $apiWebModel = new ApiWebModel();
        $data = $apiWebModel->getTrainer();
        // dd(array_reverse($data));
        
        return view("public/static/trainer", ['data' => array_reverse($data)]);
    }
}
