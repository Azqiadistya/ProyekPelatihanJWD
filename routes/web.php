<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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

Route::get('/home', function () {
    return view('index');
});
Route::get('/siswa', function () {
    return view('siswa');
});
Route::get('/nilai', function () {
    return view('nilai');
});
Route::post('/InputSiswa',[SiswaController::class,'InputSiswa']);
Route::post('/Store',[SiswaController::class,'Store']);
