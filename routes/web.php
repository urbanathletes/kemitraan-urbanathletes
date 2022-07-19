<?php

use Illuminate\Support\Facades\Route;

include __DIR__.'/web/static.php';

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () { return view("public/index");});