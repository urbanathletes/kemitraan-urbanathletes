<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () { return view("index");});

Route::prefix('workout')->group(function(){
});
Route::get('workout', function () { return view("public/static/workout");});
Route::prefix('about')->group(function(){
  Route::get('/about-us', function () { return view("public/static/about/about-us");});
  Route::get('/terms-conditions', function () { return view("public/static/about/terms-conditions");});
  Route::get('/succes-story', function () { return view("public/static/about/succes-story");});
});
// 
// 
// 
// 
// 
// 
// 
// 
// 