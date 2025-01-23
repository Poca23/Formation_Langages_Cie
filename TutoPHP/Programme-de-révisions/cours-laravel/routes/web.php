<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\QuizController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Routes d'authentification
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// Routes protégées (nécessitant une authentification)
Route::middleware(['auth'])->group(function () {
    // Routes pour les quiz
    Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
    Route::get('/quiz/{quiz}', [QuizController::class, 'show'])->name('quiz.show');
    Route::post('/quiz/check-answer', [QuizController::class, 'checkAnswer'])->name('quiz.check-answer');
    Route::post('/quiz/store-result', [QuizController::class, 'storeResult'])->name('quiz.store-result');

    // Routes pour les chapitres
    Route::get('/chapitre1', function () {
        return view('chapitre1');
    })->name('chapitre1');

    Route::get('/chapitre2', function () {
        return view('chapitre2');
    })->name('chapitre2');

    Route::get('/chapitre3', function () {
        return view('chapitre3');
    })->name('chapitre3');

    Route::get('/chapitre4', function () {
        return view('chapitre4');
    })->name('chapitre4');

    Route::get('/chapitre5', function () {
        return view('chapitre5');
    })->name('chapitre5');

    Route::get('/chapitre6', function () {
        return view('chapitre6');
    })->name('chapitre6');

    Route::get('/chapitre7', function () {
        return view('chapitre7');
    })->name('chapitre7');

    Route::get('/chapitre8', function () {
        return view('chapitre8');
    })->name('chapitre8');

    Route::get('/chapitre9', function () {
        return view('chapitre9');
    })->name('chapitre9');

    Route::get('/chapitre10', function () {
        return view('chapitre10');
    })->name('chapitre10');

    Route::get('/chapitre11', function () {
        return view('chapitre11');
    })->name('chapitre11');

    Route::get('/chapitre12', function () {
        return view('chapitre12');
    })->name('chapitre12');

    Route::get('/chapitre13', function () {
        return view('chapitre13');
    })->name('chapitre13');

    Route::get('/chapitre14', function () {
        return view('chapitre14');
    })->name('chapitre14');
});
