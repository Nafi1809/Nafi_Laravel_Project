<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index');  //merujuk ke file welcome.blade.php di folder resource/views
});

Route::get('/welcome', function () {
    return view('welcome');  //merujuk ke file welcome.blade.php di folder resource/views
});

Route::get('/', function () {
    return view('login');  //merujuk ke file welcome.blade.php di folder resource/views
});