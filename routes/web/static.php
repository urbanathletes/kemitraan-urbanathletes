<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () { return view("index");});

// Route::prefix('workout')->group(function(){
// });
Route::get('workout', function () { return view("public/static/workout");});
Route::get('timetable', function () { return view("public/static/timetable");});
Route::get('store', function () { return view("public/static/store");});
Route::prefix('about')->group(function(){
  Route::get('/about-us', function () { return view("public/static/about/about-us");});
  Route::get('/terms-conditions', function () { return view("public/static/about/terms-conditions");});
  Route::get('/succes-story', function () { return view("public/static/about/succes-story");});
  Route::get('/faqs', function () { return view("public/static/about/faqs");});
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