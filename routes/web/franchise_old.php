<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::prefix('franchise-old')->group(function() {
  Route::get('/home', function () { return view("public/kemitraan_old/home");});
  Route::get('/about-us', function () { return view("public/kemitraan_old/about-us");});
  Route::get('/our-philosophy', function () { return view("public/kemitraan_old/our-philosophy");});
  Route::get('/our-team', function () { return view("public/kemitraan_old/our-team");});
  Route::get('/support-structure', function () { return view("public/kemitraan_old/support-structure");});
  Route::get('/contact-us', function () { return view("public/kemitraan_old/contact-us");});
  Route::post('/contact-us', [ContactUsController::class, 'save'])->name('contact_save');
});
