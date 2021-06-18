<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\statusController;

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
Route::get('/tambah-status',[statusController::class,'tambahStatus']);
Route::post('/cipta-status',[statusController::class,'createPost'])->name('status.cipta');
Route::get('/tugas',[statusController::class,'dapatStatus']);
//Route::get('tugas/{id}',[statusController::class,'dapatStatusDenganID'])->name('daftar-komentar');
Route::get('/form-komentar/{id}',[statusController::class,'formKomentar']);
Route::post('/tambah-komentar',[statusController::class,'tambahKomentar'])->name('komentar.bertambah');