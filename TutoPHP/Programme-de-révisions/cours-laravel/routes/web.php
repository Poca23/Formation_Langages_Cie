<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\QuizController;

// ########################
// ** ROUTES PUBLIQUES **
// ########################

// Page d'accueil
Route::get('/', function () {
    return Auth::check() ? redirect()->route('dashboard') : view('welcome');
})->name('home');

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
    Route::get('/sommaire', function () {
        return view('sommaire');
    })->name('sommaire');

    // Chapitres dynamiques
    Route::get('/chapter/{id}', function ($id) {
        $totalChapters = 14;
        $viewName = "chapter$id";

        if (view()->exists($viewName)) {
            $progress = round(($id / $totalChapters) * 100);
            return view($viewName, [
                'progress' => $progress,
                'currentChapterId' => $id,
                'totalChapters' => $totalChapters,
            ]);
        }
        abort(404, "Chapitre non trouvé !");
    })->name('chapter')->where('id', '[1-9]|1[0-4]');

    // Quiz
    Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
    Route::get('/quiz/{quiz}', [QuizController::class, 'show'])
        ->name('quiz.show')
        ->where('quiz', '[0-9]+');
    Route::post('/quiz/check-answer', [QuizController::class, 'checkAnswer'])->name('quiz.check-answer');
    Route::post('/quiz/store-result', [QuizController::class, 'storeResult'])->name('quiz.store-result');
});

// ########################
// ** ROUTE PAR DÉFAUT : 404 **
// ########################
Route::fallback(function () {
    return view('errors.404');
})->name('fallback');
