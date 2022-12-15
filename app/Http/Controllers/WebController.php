<?php

namespace App\Http\Controllers;

use App\Models\ApiWebModel;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $apiWebModel = new ApiWebModel();
        $error = false;
        $data = [];
        try {
            $data = $apiWebModel->getFotoKelas();
        } catch (\Throwable $th) {
            $error = 'Error API WEB foto_kelas';
        }
        return view("public/index", ['fotoKelas' => array_reverse($data), 'error' => $error]);
    }

    public function Trainer()
    {
        $apiWebModel = new ApiWebModel();
        $error = false;
        $data = [];
        try {
            $data = $apiWebModel->getTrainer();
        } catch (\Throwable $th) {
            $error = 'Error API WEB personal_training';
        }
        
        return view("public/static/trainer", ['data' => array_reverse($data), 'error' => $error]);
    }
}
