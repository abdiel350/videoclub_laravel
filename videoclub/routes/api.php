
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APICatalogController;

// Rutas públicas (sin autenticación)
Route::prefix('v1/catalog')->group(function () {
    Route::get('/', [APICatalogController::class, 'index']);
    Route::get('/{id}', [APICatalogController::class, 'show']);
});

// Rutas protegidas (con autenticación básica sin estado)
Route::middleware('auth.basic')->prefix('v1/catalog')->group(function () {
    Route::post('/', [APICatalogController::class, 'store']);
    Route::put('/{id}', [APICatalogController::class, 'update']);
    Route::delete('/{id}', [APICatalogController::class, 'destroy']);
    Route::put('/{id}/rent', [APICatalogController::class, 'putRent']);
    Route::put('/{id}/return', [APICatalogController::class, 'putReturn']);
});