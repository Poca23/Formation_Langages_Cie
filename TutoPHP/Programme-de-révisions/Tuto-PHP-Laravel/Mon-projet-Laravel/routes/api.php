<?php

use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\Api\v1\AdminController;

Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:api')->group(function () {
    Route::get('admin/users', [AdminController::class, 'index']);
    Route::post('admin/users', [AdminController::class, 'store']);
});
