<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('admin.users.index'); // Afficher le profil
    Route::get('/profile/edit', [UserController::class, 'edit'])->name('admin.users.edit'); // Afficher formulaire d'édition
    Route::put('/profile', [UserController::class, 'update'])->name('admin.users.update'); // Mettre à jour le profil
});
require __DIR__ . '/auth.php';
