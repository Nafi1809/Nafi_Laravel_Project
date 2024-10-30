<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/index', function () {
//     return view('index');  //merujuk ke file welcome.blade.php di folder resource/views
// });

Route::get('/welcome', function () {
    return view('welcome');  //merujuk ke file welcome.blade.php di folder resource/views
});

Route::get('/', function () {
    return view('login');  //merujuk ke file welcome.blade.php di folder resource/views
});

Route::get('/about', function () {
    return view('about');  //merujuk ke file welcome.blade.php di folder resource/views
});

Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/about', [HomeController::class, 'about'])->name('about');
