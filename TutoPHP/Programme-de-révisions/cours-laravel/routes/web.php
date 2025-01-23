<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\QuizController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| C'est ici que vous définissez toutes les routes de votre application web.
| - Routes publiques accessibles à tout le monde
| - Routes protégées nécessitant une connexion (middleware auth)
| Assurez une navigation claire et sécurisée !
|
*/

// ########################
// ** ROUTES PUBLIQUES **
// ########################

// Page d'accueil
Route::get('/', function () {
    // Redirige les utilisateurs connectés vers le tableau de bord
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('welcome'); // Vue par défaut pour les visiteurs non connectés
})->name('home');

// ---------------------------
// ** ROUTES AUTHENTIFICATION **
// ---------------------------

// Page de connexion (GET) : Afficher le formulaire
Route::get('login', [CustomAuthController::class, 'index'])
    ->name('login')
    ->middleware('guest'); // Ne peut y accéder que si NON connecté

// Traitement connexion (POST) : Vérifier les identifiants utilisateur
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])
    ->name('login.custom');

// Page d'inscription (GET) : Afficher le formulaire
Route::get('registration', [CustomAuthController::class, 'registration'])
    ->name('register-user')
    ->middleware('guest'); // Ne peut y accéder que si NON connecté

// Traitement inscription (POST) : Valider et créer un utilisateur
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])
    ->name('register.custom');

// Tableau de bord des utilisateurs connectés (GET)
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])
    ->name('dashboard')
    ->middleware('auth'); // Accès uniquement si connecté

// Déconnexion utilisateur (POST, pour plus de sécurité)
Route::post('logout', [CustomAuthController::class, 'signOut'])->name('logout');

// #############################
// ** ROUTES PROTÉGÉES : AUTH **
// #############################

Route::middleware(['auth'])->group(function () { // Middleware général pour tout le groupe

    // Sommaire ou table des matières (page générique protégée)
    Route::get('/sommaire', function () {
        return view('sommaire');
    })->name('sommaire');

    // -----------------------------
    // ** Chapitres Dynamiques **
    // -----------------------------
    Route::get('/chapter/{id}', function ($id) {
        $totalChapters = 14; // Total de chapitres disponibles
        $viewName = "chapter$id"; // Nom de la vue correspondant au chapitre

        if (view()->exists($viewName)) { // Vérifie si la vue existe
            $progress = round(($id / $totalChapters) * 100); // Calcul du progrès
            return view($viewName, [
                'progress' => $progress, // Pourcentage de progression
                'currentChapterId' => $id,
                'totalChapters' => $totalChapters,
            ]);
        }

        // Si la vue du chapitre n'existe pas, renvoie un 404 personnalisé
        abort(404, "Chapitre non trouvé !");
    })->name('chapter')->where('id', '[1-9]|1[0-4]'); // Validation : ID entre 1 et 14

    // ---------------------------
    // ** Routes pour les Quiz **
    // ---------------------------

    // Lister les quiz disponibles
    Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');

    // Afficher un quiz spécifique via son ID
    Route::get('/quiz/{quiz}', [QuizController::class, 'show'])
        ->name('quiz.show')
        ->where('quiz', '[0-9]+'); // Assurez que le paramètre 'quiz' est numérique

    // Vérifier une réponse via une requête POST
    Route::post('/quiz/check-answer', [QuizController::class, 'checkAnswer'])
        ->name('quiz.check-answer');

    // Enregistrer les résultats d'un quiz
    Route::post('/quiz/store-result', [QuizController::class, 'storeResult'])
        ->name('quiz.store-result');
});

// #############################
// ** ROUTE DE SECOURS (404) **
// #############################

// Capture toutes les routes non définies et affiche une vue 404 personnalisée
Route::fallback(function () {
    return view('errors.404'); // Assurez-vous que cette vue existe : resources/views/errors/404.blade.php
})->name('fallback');
