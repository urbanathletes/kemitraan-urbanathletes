<?php
use Illuminate\Support\Facades\Route;

Route::get('/home', function () { return view("public/kemitraan/index");});
Route::get('/about-us', function () { return view("public/kemitraan/about-us");});
Route::get('/our-philosophy', function () { return view("public/kemitraan/our-philosophy");});
Route::get('/our-team', function () { return view("public/kemitraan/our-team");});
Route::get('/support-structure', function () { return view("public/kemitraan/support-structure");});
Route::get('/contact-us', function () { return view("public/kemitraan/contact-us");});