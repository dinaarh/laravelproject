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

Route::get('/dina', function () {
    return view('dina');
});

Route::get('/siswa', function () {
    $nama = 'Dina Rahmawati';
    $nilai = [100, 95, 49, 97, 48];
    return view('siswa', compact('nama','nilai'));
});