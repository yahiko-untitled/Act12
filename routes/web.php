<?php

use App\Http\Controllers\SuperheroeController;

Route::resource('superheroes', SuperheroeController::class);

// Rutas para ver eliminados y restaurar
Route::get('superheroes-deleted', [SuperheroeController::class, 'deleted'])->name('superheroes.deleted');
Route::post('superheroes/{id}/restore', [SuperheroeController::class, 'restore'])->name('superheroes.restore');

