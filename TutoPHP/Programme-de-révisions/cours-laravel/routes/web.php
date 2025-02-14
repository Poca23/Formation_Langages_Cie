<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\SommaireController;

// ########################
// ** ROUTES PUBLIQUES **
// ########################

// Page d'accueil
Route::get('/', function () {
    return Auth::check() ? redirect()->route('dashboard') : view('welcome');
})->name('home');

// Page d'accueil non connecté
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// ---------------------------
// ** AUTHENTIFICATION **
// ---------------------------

// Connexion
Route::get('login', [CustomAuthController::class, 'index'])
    ->name('login')
    ->middleware('guest');

Route::post('custom-login', [CustomAuthController::class, 'customLogin'])
    ->name('login.custom');

// Inscription
Route::get('registration', [CustomAuthController::class, 'registration'])
    ->name('register')
    ->middleware('guest');

Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])
    ->name('register.custom');

// Tableau de bord
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])
    ->name('dashboard')
    ->middleware('auth');

// Déconnexion
Route::post('logout', [CustomAuthController::class, 'signOut'])->name('logout');

// ########################
// ** ROUTES PROTÉGÉES **
// ########################
Route::middleware('auth')->group(function () {
    // Sommaire
    Route::get('/sommaire', [SommaireController::class, 'index'])->name('sommaire');

    // Chapitres dynamiques (progression incluse)
    Route::get('/chapter/{chapter}', [ChapterController::class, 'show'])
        ->name('chapter.show')
        ->whereNumber('chapter')
        ->where('chapter', '[0-9]+');


    Route::post('/chapter/{id}/complete', [ChapterController::class, 'markAsCompleted'])
        ->name('chapter.complete');

    // Quiz
    Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
    Route::post('/chapter/{chapter}/quiz/check-answer', [QuizController::class, 'checkAnswer'])->name('quiz.check-answer');
    Route::post('/chapter/{chapter}/quiz/store-result', [QuizController::class, 'storeResult'])->name('quiz.store-result');
    });

// ########################
// ** ROUTE PAR DÉFAUT : 404 **
// ########################
Route::fallback(function () {
    return view('errors.404');
})->name('404');
