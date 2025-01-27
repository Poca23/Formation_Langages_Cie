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
            ['id' => 1, 'title' => 'Introduction', 'duration' => '45 min'],
            ['id' => 2, 'title' => 'Les bases', 'duration' => '60 min'],
            ['id' => 3, 'title' => 'Contrôle de flux', 'duration' => '50 min'],
            ['id' => 4, 'title' => 'Fonctions', 'duration' => '55 min'],
            ['id' => 5, 'title' => 'Tableaux', 'duration' => '40 min'],
            ['id' => 6, 'title' => 'Sessions et Cookies', 'duration' => '45 min'],
            ['id' => 7, 'title' => 'Introduction à Laravel', 'duration' => '50 min'],
            ['id' => 8, 'title' => 'Installation de Laravel', 'duration' => '60 min'],
            ['id' => 9, 'title' => 'Structure de Laravel', 'duration' => '45 min'],
            ['id' => 10, 'title' => 'Routes et Contrôleurs', 'duration' => '55 min'],
            ['id' => 11, 'title' => 'Modèles et Bases de données', 'duration' => '60 min'],
            ['id' => 12, 'title' => 'Vues et Frontend', 'duration' => '50 min'],
            ['id' => 13, 'title' => 'Sécurité et Validation', 'duration' => '65 min'],
            ['id' => 14, 'title' => 'Déploiement et Bonnes Pratiques', 'duration' => '40 min'],
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
