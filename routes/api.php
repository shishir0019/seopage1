<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

Route::prefix('files')->group(function () {
    Route::get('/', [FileController::class, 'index'])->name('files.all');
    Route::get('/{id}', [FileController::class, 'show'])->name('files.show');
    Route::get('/cards/{id}', [FileController::class, 'showByCardId'])->name('files.card.show');
    Route::post('/{card_id}', [FileController::class, 'store'])->name('files.create');
});
