<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProjekController;
use App\Http\Controllers\clientController;

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

Route::get('/', [clientController::class,'dashboard']);
Route::get('/kontak', [clientController::class,'kontak']);
Route::get('/layanan', [clientController::class,'layanan']);
Route::get('/projek', [clientController::class,'projek']);
Route::get('/tentang', [clientController::class,'tentang']);
Route::get('/cari', [clientController::class,'cari']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('admin/tentang', TentangController::class)->names("admin.tentang");
    Route::resource('admin/layanan', LayananController::class)->names("admin.layanan");
    Route::resource('admin/kontak', KontakController::class)->names("admin.kontak");
    Route::resource('admin/projek', ProjekController::class)->names("admin.projek");
});
