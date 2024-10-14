<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/portpolio', function () { 
    return view('portpolio'); 
    });
Route::get('/about', function () { 
    return view('about'); 
});
Route::get('/hello', function () { 
    return view('hello'); 
    });
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () { 
    return view('contact'); 
});

Route::post('/contact', function (Illuminate\Http\Request $request) {
    // Logika untuk menangani pengiriman form kontak
    return back()->with('success', 'Your message has been sent!');
});


