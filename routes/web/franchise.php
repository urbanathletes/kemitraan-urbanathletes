<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\InvestmentController;
use Illuminate\Support\Facades\Route;

Route::prefix('franchise')->group(function() {
  Route::get('', function () { return view("public/kemitraan/home");});
  Route::get('/our-philosophy', function () { return view("public/kemitraan/our-philosophy");});
  Route::get('/our-team', function () { return view("public/kemitraan/our-team");});
  Route::get('/anual-report', function () { return view("public/kemitraan/anual-report");});
  Route::get('/presentation', function () { return view("public/kemitraan/presentation");});
  Route::get('/urban-athletes', function () { return view("public/kemitraan/urban-athletes");});
  Route::get('/valor', function () { return view("public/kemitraan/valor");});
  Route::get('/fitness-works', function () { return view("public/kemitraan/fitness-works-img");});
  Route::post('' , [InvestmentController::class, 'home']);
});
Route::post('ua' , [InvestmentController::class, 'ua']);
Route::post('fw' , [InvestmentController::class, 'fw']);
