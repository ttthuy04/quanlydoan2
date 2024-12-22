<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoanController;


// Route::resource('doans', DoanController::class);




Route::get('/doans', [DoanController::class, 'index'])->name('doans.index');
Route::get('doans/create', [DoanController::class, 'create'])->name('doans.create');
Route::post('/doans', [DoanController::class, 'store'])->name('doans.store');
Route::get('/doans/{id}', [DoanController::class, 'show'])->name('doans.show');

Route::get('doans/{id}/edit', [DoanController::class, 'edit'])->name('doans.edit');
Route::put('/doans/{id}', [DoanController::class, 'update'])->name('doans.update');

Route::delete('/doans/{id}', [DoanController::class, 'destroy'])->name('doans.destroy');
