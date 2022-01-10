<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/client', [ClientController::class, 'index'])->name('client.index');
    Route::post('/client', [ClientController::class, 'store'])->name('client.store');
    Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
    Route::get('/client/{client}/edit', [ClientController::class, 'edit'])->name('client.edit');
    Route::put('/client/{client}', [ClientController::class, 'update'])->name('client.update');
    Route::delete('/client/{client}', [ClientController::class, 'destroy'])->name('client.destroy');
});
