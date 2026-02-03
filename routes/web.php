<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasConstroller;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ShopController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kelas', [KelasConstroller::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [KelasConstroller::class, 'create'])->name('kelas.create');
Route::post('/kelas', [KelasConstroller::class, 'store'])->name('kelas.store');
Route::get('/kelas/{id}/edit', [KelasConstroller::class, 'edit'])->name('kelas.edit');
Route::put('/kelas/{id}', [KelasConstroller::class, 'update'])->name('kelas.update');
Route::get('/kelas/{id}', [KelasConstroller::class, 'destroy'])->name('kelas.destroy');
Route::resource('siswa', SiswaController::class);

