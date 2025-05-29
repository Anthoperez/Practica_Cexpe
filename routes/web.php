<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TallerController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/programas', function () {
    return view('programas');
})->name('programas');

Route::get('/talleres', [TallerController::class, 'index'])->name('talleres');
Route::get('/talleres/{taller}', [TallerController::class, 'show'])->name('taller.show');

Route::get('/asesoramiento', function () {
    return view('asesoramiento');
})->name('asesoramiento');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');