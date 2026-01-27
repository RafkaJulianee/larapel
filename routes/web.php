<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasConstroller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kelas', [KelasConstroller::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [KelasConstroller::class, 'create'])->name('kelas.create');
Route::post('/kelas', [KelasConstroller::class, 'store'])->name('kelas.store');

