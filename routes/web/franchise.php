<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::prefix('franchise')->group(function() {
  Route::get('', function () { return view("public/kemitraan/home");});
  Route::get('/our-philosophy', function () { return view("public/kemitraan/our-philosophy");});
  Route::get('/our-team', function () { return view("public/kemitraan/our-team");});
  Route::get('/urban-athletes', function () { return view("public/kemitraan/urban-athletes");});
  Route::get('/valor', function () { return view("public/kemitraan/valor");});
  Route::get('/fitness-works', function () { return view("public/kemitraan/fitness-works-img");});
});
