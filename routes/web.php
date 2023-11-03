<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TentangController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\ProjekController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('admin/tentang', TentangController::class);
    Route::resource('admin/layanan', LayananController::class);
    Route::resource('admin/kontak', KontakController::class);
    Route::resource('admin/projek', ProjekController::class);
});
