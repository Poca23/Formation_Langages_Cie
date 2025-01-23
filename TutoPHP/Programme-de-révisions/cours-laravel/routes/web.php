<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\QuizController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Authentification
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// Routes protégées nécessitant une authentification
Route::middleware(['auth'])->group(function () {
    // Route dynamique pour les chapitres
    Route::get('/chapter/{id}', function ($id) {
        $viewName = 'chapter' . $id; // Exemple : "chapter1"
        if (view()->exists($viewName)) {
            return view($viewName);
        }
        abort(404, "Chapitre non trouvé !");
    })->name('chapter')->where('id', '[1-9]|1[0-4]'); // Limite les ID à 1-14

    // Quiz
    Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
    Route::get('/quiz/{quiz}', [QuizController::class, 'show'])->name('quiz.show');
    Route::post('/quiz/check-answer', [QuizController::class, 'checkAnswer'])->name('quiz.check-answer');
    Route::post('/quiz/store-result', [QuizController::class, 'storeResult'])->name('quiz.store-result');

    // Sommaire
    Route::get('/sommaire', function () {
        return view('sommaire');
    })->name('sommaire');
});

// Gestion des erreurs : route de secours 404
Route::fallback(function () {
    return view('errors.404');
});
