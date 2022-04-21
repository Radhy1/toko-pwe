<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JualController;
use App\Http\Controllers\KeduaController;
use App\Http\Controllers\KeenamController;
use App\Http\Controllers\KelimaController;
use App\Http\Controllers\KetigaController;
use App\Http\Controllers\KeempatController;
use App\Http\Controllers\KetujuhController;
use App\Http\Controllers\PertamaController;
use App\Http\Controllers\KedelapanController;
use App\Http\Controllers\KesembilanController;

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

//route tanpa controller
Route::get('/Beranda', function () {
    echo ("Ini halaman Beranda");
});

Route::get('/Profil', function () {
    echo ("Ini halaman Profil");
});

Route::get('/Profil/Sejarah', function () {
    echo ("Ini halaman Sejarah yang didalam Profil");
});

Route::get('/Profil/Lambang', function () {
    echo ("Ini halaman Lambang yang didalam profil");
});

Route::get('/Fakultas', function () {
    echo ("Ini halaman Fakultas");
});

Route::get('/Fakultas/Fakultas FKIP', function () {
    echo ("Ini halaman Fakultas FKIP yang didalam Fakultas");
});

Route::get('/Fakultas/Fakultas Teknik', function () {
    echo ("Ini halaman Fakultas Teknik yang didalam Fakultas");
});

Route::get('/UNIT', function () {
    echo ("Ini halaman UNIT");
});

Route::get('/UNIT/UPT', function () {
    echo ("Ini halaman UPT yang didalam UNIT");
});

Route::get('/UNIT/UPT/UPT PERPUSTAKAAN', function () {
    echo ("Ini halaman UPT PERPUSTAKAAN yang didalam UPT/UNIT");
});

//route controller
Route::get('/jual', [JualController::class, 'awal']);

Route::get('/pertama', [PertamaController::class, 'awal']);

Route::get('/kedua', [KeduaController::class, 'awal']);

Route::get('/ketiga', [KetigaController::class, 'awal']);

Route::get('/keempat', [KeempatController::class, 'awal']);

Route::get('/kelima', [KelimaController::class, 'awal']);

Route::get('/keenam', [KeenamController::class, 'awal']);

Route::get('/ketujuh', [KetujuhController::class, 'awal']);

Route::get('/kedelapan', [KedelapanController::class, 'awal']);

Route::get('/kesembilan', [KesembilanController::class, 'awal']);
