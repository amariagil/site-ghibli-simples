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

Route::get('/index', function () {
    return view('index');
});


Route::get('/Pagina1', function () {
    return view('Pagina1');
});


Route::get('/Pagina2', function () {
    return view('Pagina2');
});

Route::get('/Pagina3', function () {
    return view('Pagina3');
});

Route::get('/Pagina4', function () {
    return view('Pagina4');
});

Route::get('/Pagina5', function () {
    return view('Pagina5');
});

Route::get('/Pagina6', function () {
    return view('Pagina6');
});

Route::get('/Pagina7', function () {
    return view('Pagina7');
});

