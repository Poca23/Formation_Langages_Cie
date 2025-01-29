<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\Api\v1\AdminController;

// Route pour récupérer tous les utilisateurs au format JSON
Route::get('/admin/api/users', [UserController::class, 'apiIndex']);

// Route pour l'authentification
Route::post('login', [AuthController::class, 'login']);

// Route protégée par authentification
Route::middleware('auth:api')->group(function () {
    Route::get('admin/users', [AdminController::class, 'index']);
    Route::post('admin/users', [AdminController::class, 'store']);
    // Ajoutez d'autres routes protégées si nécessaire
});
