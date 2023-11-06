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
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('halo2', function () {
	return "<h1>Halo, Selamat datang</h1>";
});


Route::get('paymentpage', function () {
    return view('paymentpage');
});

Route::get('hello1', function () {
    return view('pertemuan1_index');
});

Route::get('hello2', function () {
    return view('pertemuan2_berita');
});

Route::get('hello3', function () {
    return view('pertemuan2_index');
});

Route::get('hello4', function () {
    return view('pertemuan2_js2');
});

Route::get('hello5', function () {
    return view('pertemuan2_news');
});

Route::get('hello6', function () {
    return view('pertemuan2_responsive');
});

Route::get('hello7', function () {
    return view('pertemuan3');
});

Route::get('Linktree', function () {
    return view('linktree');
});