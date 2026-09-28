<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/beranda', [PageController::class, 'home'])->name('home.alias');
Route::get('/profil-mahasiswa', [PageController::class, 'profile'])->name('profile');
Route::get('/mahasiswa/{nrp}', [PageController::class, 'profile'])
    ->whereNumber('nrp')
    ->name('mahasiswa.show');

Route::get('/ide-agent', [PageController::class, 'agent'])->name('agent.show');
Route::post('/ide-agent', [PageController::class, 'submitIdea'])->name('agent.submit');

Route::get('/hitung-ipk', [PageController::class, 'ipkForm'])->name('ipk.form');
Route::get('/hitung-ipk/{ip1}/{ip2}', [PageController::class, 'ipkCalculate'])
    ->where(['ip1' => '(?:[0-3](?:\\.[0-9]+)?|4(?:\\.0+)?)', 'ip2' => '(?:[0-3](?:\\.[0-9]+)?|4(?:\\.0+)?)'])
    ->name('ipk.calculate');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
