<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class ApiWebModel extends Model
{
    use HasFactory;

    public function getTrainer()
    {
        $pt = Http::get('https://apiweb.urbanathletes.co.id/personal_training');
        // $pt = Http::get('http://localhost:5050/personal_training');
        return $pt->json();
    }

    public function getFotoKelas()
    {
        $pt = Http::get('https://apiweb.urbanathletes.co.id/foto_kelas');
        return $pt->json();
    }
}
