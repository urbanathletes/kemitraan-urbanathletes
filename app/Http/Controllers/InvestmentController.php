<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function home(Request $request)
    {
        $data = $request->all();
        Investment::create($data);
        return redirect(url('franchise'))->with('success', 'Silahkan cek Email yang kami kirim ke ');
    }

    public function ua(Request $request)
    {
        $data = $request->all();
        Investment::create($data);
        return redirect(url('franchise/urban-athletes'))->with('success', 'Silahkan cek Email yang kami kirim ke ');
    }

    public function fw(Request $request)
    {
        $data = $request->all();
        Investment::create($data);
        return redirect(url('franchise/fitness-works'))->with('success', 'Silahkan cek Email yang kami kirim ke ');
    }
}
