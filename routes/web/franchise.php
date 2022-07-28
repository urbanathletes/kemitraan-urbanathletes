<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::prefix('franchise')->group(function() {
  Route::get('/home', function () { return view("public/kemitraan/home");});
  // Route::get('/about-us', function () { return view("public/kemitraan/about-us");});
  Route::get('/our-philosophy', function () { return view("public/kemitraan/our-philosophy");});
  Route::get('/our-team', function () { return view("public/kemitraan/our-team");});
  // Route::get('/support-structure', function () { return view("public/kemitraan/support-structure");});
  // Route::get('/contact-us', function () { return view("public/kemitraan/contact-us");});
  // Route::post('/contact-us', [ContactUsController::class, 'save'])->name('contact_save');
});
