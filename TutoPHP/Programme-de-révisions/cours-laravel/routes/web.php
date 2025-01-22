<?php

use Illuminate\Support\Facades\Route;

// Route vers le sommaire
Route::get('/', function () {
    return view('sommaire');
})->name('home');

// Routes pour chaque chapitre
Route::get('/chapter1', function () {
    return view('chapter1-introduction');
})->name('chapter1'); // Nom de la route pour le chapitre 1

Route::get('/chapter2', function () {
    return view('chapter2-basics');
})->name('chapter2'); // Nom de la route pour le chapitre 2

Route::get('/chapter3', function () {
    return view('chapter3-control-flow');
})->name('chapter3'); // Nom de la route pour le chapitre 3

Route::get('/chapter4', function () {
    return view('chapter4-functions');
})->name('chapter4'); // Nom de la route pour le chapitre 4

Route::get('/chapter5', function () {
    return view('chapter5-arrays');
})->name('chapter5'); // Nom de la route pour le chapitre 5

Route::get('/chapter6', function () {
    return view('chapter6-sessions-cookies');
})->name('chapter6'); // Nom de la route pour le chapitre 6

Route::get('/chapter7', function () {
    return view('chapter7-laravel-intro');
})->name('chapter7'); // Nom de la route pour le chapitre 7

Route::get('/chapter8', function () {
    return view('chapter8-laravel-installation');
})->name('chapter8'); // Nom de la route pour le chapitre 8

Route::get('/chapter9', function () {
    return view('chapter9-laravel-structure');
})->name('chapter9'); // Nom de la route pour le chapitre 9

Route::get('/chapter10', function () {
    return view('chapter10-routes-controllers');
})->name('chapter10'); // Nom de la route pour le chapitre 10

Route::get('/chapter11', function () {
    return view('chapter11-models-databases');
})->name('chapter11'); // Nom de la route pour le chapitre 11

Route::get('/chapter12', function () {
    return view('chapter12-views-frontend');
})->name('chapter12'); // Nom de la route pour le chapitre 12

Route::get('/chapter13', function () {
    return view('chapter13-security-validation');
})->name('chapter13'); // Nom de la route pour le chapitre 13

Route::get('/chapter14', function () {
    return view('chapter14-deployments-practices');
})->name('chapter14'); // Nom de la route pour le chapitre 14

// Route vers le programme de révisions
Route::get('/programme-revisions', function () {
    return view('programme-revisions');
})->name('programme-revisions'); // Nom de la route pour le programme de révisions
