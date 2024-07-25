<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.index');
});

Route::get('/tentang-kami', function () {
    return view('front.about');
});
Route::get('/bumdes', function () {
    return view('front.program.bumdes');
});
Route::get('/umkm', function () {
    return view('front.program.umkm');
});
Route::get('/mitra', function () {
    return view('front.client');
});
Route::get('/portofolio', function () {
    return view('front.portofolio');
});

Route::get('/dashboard', function () {
    return view('back.dashboard');
});
