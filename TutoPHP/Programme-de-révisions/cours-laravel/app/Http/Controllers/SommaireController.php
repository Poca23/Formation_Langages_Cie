<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\UserQuizResult;

class SommaireController extends Controller
{
    public function index()
    {
        $chapters = [
            ['number' => 1, 'title' => 'Introduction', 'route' => 'chapter1-introduction'],
            ['number' => 2, 'title' => 'Les bases', 'route' => 'chapter2-basics'],
            ['number' => 3, 'title' => 'Contrôle de flux', 'route' => 'chapter3-control-flow'],
            ['number' => 4, 'title' => 'Fonctions', 'route' => 'chapter4-functions'],
            ['number' => 5, 'title' => 'Tableaux', 'route' => 'chapter5-arrays'],
            ['number' => 6, 'title' => 'Sessions et Cookies', 'route' => 'chapter6-sessions-cookies'],
            ['number' => 7, 'title' => 'Introduction à Laravel', 'route' => 'chapter7-laravel-intro'],
            ['number' => 8, 'title' => 'Installation de Laravel', 'route' => 'chapter8-laravel-installation'],
            ['number' => 9, 'title' => 'Structure de Laravel', 'route' => 'chapter9-laravel-structure'],
            ['number' => 10, 'title' => 'Routes et Contrôleurs', 'route' => 'chapter10-routes-controllers'],
            ['number' => 11, 'title' => 'Modèles et Bases de données', 'route' => 'chapter11-models-databases'],
            ['number' => 12, 'title' => 'Vues et Frontend', 'route' => 'chapter12-views-frontend'],
            ['number' => 13, 'title' => 'Sécurité et Validation', 'route' => 'chapter13-security-validation'],
            ['number' => 14, 'title' => 'Déploiement et Bonnes Pratiques', 'route' => 'chapter14-deployments-practices'],
        ];

        // Récupérer les résultats des quiz si l'utilisateur est connecté
        $quizResults = [];
        if (\Illuminate\Support\Facades\Auth::check()) {
            $quizResults = UserQuizResult::where('user_id', \Illuminate\Support\Facades\Auth::user()->id)
                ->with('quiz')
                ->get()
                ->keyBy(function ($result) {
                    return $result->quiz->chapter_number;
                });
        }

        return view('sommaire', compact('chapters', 'quizResults'));
    }
}
