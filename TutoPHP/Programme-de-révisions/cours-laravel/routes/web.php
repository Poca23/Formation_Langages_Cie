<?php

use Illuminate\Support\Facades\Route;

// Route de connexion
Route::get('/login', function () {
    return view('login'); // Vue login.blade.php pour l'authentification
})->name('login');

// Groupement des routes avec le middleware 'auth.custom'
Route::middleware('auth.custom')->group(function () {
    // Route vers la page d'accueil
    Route::get('/', function () {
        return view('sommaire');
    })->name('home');

    // Routes pour chaque chapitre
    Route::get('/chapter1', function () {
        return view('chapter1-introduction');
    })->name('chapter1');

    Route::get('/chapter2', function () {
        return view('chapter2-basics');
    })->name('chapter2');

    Route::get('/chapter3', function () {
        return view('chapter3-control-flow');
    })->name('chapter3');

    Route::get('/chapter4', function () {
        return view('chapter4-functions');
    })->name('chapter4');

    Route::get('/chapter5', function () {
        return view('chapter5-arrays');
    })->name('chapter5');

    Route::get('/chapter6', function () {
        return view('chapter6-sessions-cookies');
    })->name('chapter6');

    Route::get('/chapter7', function () {
        return view('chapter7-laravel-intro');
    })->name('chapter7');

    Route::get('/chapter8', function () {
        return view('chapter8-laravel-installation');
    })->name('chapter8');

    Route::get('/chapter9', function () {
        return view('chapter9-laravel-structure');
    })->name('chapter9');

    Route::get('/chapter10', function () {
        return view('chapter10-routes-controllers');
    })->name('chapter10');

    Route::get('/chapter11', function () {
        return view('chapter11-models-databases');
    })->name('chapter11');

    Route::get('/chapter12', function () {
        return view('chapter12-views-frontend');
    })->name('chapter12');

    Route::get('/chapter13', function () {
        return view('chapter13-security-validation');
    })->name('chapter13');

    Route::get('/chapter14', function () {
        return view('chapter14-deployments-practices');
    })->name('chapter14');

    // Route vers le programme de révisions
    Route::get('/programme-revisions', function () {
        return view('programme-revisions');
    })->name('programme-revisions');
});
