<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasConstroller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kelas', [KelasConstroller::class, 'index'])->name('kelas.index');

