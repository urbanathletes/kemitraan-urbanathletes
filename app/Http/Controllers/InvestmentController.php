<?php

namespace App\Http\Controllers;

use App\Mail\InvestJoinMail;
use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InvestmentController extends Controller
{
    public function home(Request $request)
    {
        $data = $request->all();
        $dataInves = Investment::create($data);
        Mail::to($data['email'])->send(new InvestJoinMail($dataInves));
        return redirect(url('franchise'))->with('success', 'Silahkan cek Email yang kami kirim ke ' . $data['email']);
    }

    // public function ua(Request $request)
    // {
    //     $data = $request->all();
    //     Investment::create($data);
    //     return redirect(url('franchise/urban-athletes'))->with('success', 'Silahkan cek Email yang kami kirim ke ');
    // }

    // public function fw(Request $request)
    // {
    //     $data = $request->all();
    //     Investment::create($data);
    //     return redirect(url('franchise/fitness-works'))->with('success', 'Silahkan cek Email yang kami kirim ke ');
    // }
}
