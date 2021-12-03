<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
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
    return view('index');
});

Route::resource('pegawai', PegawaiController::class)
    ->missing(function (Request $request) {
        return Redirect::route('/');
    });

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');

Route::get('/createpegawai', [PegawaiController::class, 'create'])->name('createpegawai');
Route::post('/storepegawai', [PegawaiController::class, 'store'])->name('storepegawai');

Route::get('/tampilpegawai/{id}', [PegawaiController::class, 'show'])->name('show');
Route::put('/updatepegawai/{id}', [PegawaiController::class, 'update'])->name('update');

Route::get('/deletepegawai/{id}', [PegawaiController::class, 'destroy'])->name('destroy');