<?php

use App\Http\Controllers\ScheduleClassController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/index', function () { return view("index");});

// Route::prefix('workout')->group(function(){
// });
Route::get('workout', function () { return view("public/static/workout");});
// Route::get('trainer', function () { return view("public/static/trainer");});
Route::get('trainer', [WebController::class, 'trainer']);
// Route::get('timetable', function () { return view("public/static/timetable");});
Route::get('timetable', [ScheduleClassController::class, 'timetable']);
Route::get('timetable-select', [ScheduleClassController::class, 'timetableSelect']);
Route::get('store', function () { return view("public/static/store");});
Route::get('merchandise', function () { return view("public/static/merchandise");});
Route::prefix('news')->group(function () {
  Route::get('', function () { return view("public/static/news/index");});
  Route::get('news1', function () { return view("public/static/news/news1");});
  Route::get('news2', function () { return view("public/static/news/news2");});
  Route::get('news3', function () { return view("public/static/news/news3");});
  Route::get('news4', function () { return view("public/static/news/news4");});
  Route::get('news5', function () { return view("public/static/news/news5");});
  Route::get('news6', function () { return view("public/static/news/news6");});
});
Route::prefix('about')->group(function(){
  Route::get('/about-us', function () { return view("public/static/about/about-us");});
  Route::get('/clubs', function () { return view("public/static/about/clubs");});
  Route::get('/terms-conditions', function () { return view("public/static/about/terms-conditions");});
  Route::get('/succes-story', function () { return view("public/static/about/succes-story");});
  Route::get('/faqs', function () { return view("public/static/about/faqs");});
});
Route::get('/location', function () { return view("public/static/location");});