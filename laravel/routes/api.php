<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Rotas básicas da API
Route::apiResource('users', UserController::class);

// Rotas personalizadas
Route::get('/hello', function () {
    return response()->json([
        'message' => 'Hello from API!',
        'status' => 'success',
        'timestamp' => now()
    ]);
});