<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Ruta de prueba básica
Route::get('/test', function () {
    return response()->json(['status' => 'API Works!']);
});

// Rutas de autenticación (ejemplo)
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);

// Rutas protegidas
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});