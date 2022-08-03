<?php

use Illuminate\Support\Facades\Route;

include __DIR__.'/web/franchise_old.php';
include __DIR__.'/web/franchise.php';
include __DIR__.'/web/static.php';

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () { return view("public/index");});
Route::get('/login', function () { return view("public/login");});
Route::get('/tnc-contest', function () { return view("public/tnc-contest");});
