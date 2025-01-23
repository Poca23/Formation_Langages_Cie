<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\UserQuizResult;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($chapterNumber)
    {
        $quiz = Quiz::where('chapter_number', $chapterNumber)
            ->with(['questions' => function ($query) {
                $query->inRandomOrder()->limit(10); // Limite à 10 questions aléatoires
            }])
            ->firstOrFail();

        // Vérifie si l'utilisateur a déjà passé ce quiz
        $previousResult = UserQuizResult::where('user_id', auth()->id())
            ->where('quiz_id', $quiz->id)
            ->first();

        return view('quiz.show', compact('quiz', 'previousResult'));
    }

    public function submit(Request $request, Quiz $quiz)
    {
        $answers = $request->input('answers');
        $score = 0;
        $totalQuestions = count($quiz->questions);
        $correctAnswers = [];
        $wrongAnswers = [];

        foreach ($quiz->questions as $question) {
            if (
                isset($answers[$question->id]) &&
                $answers[$question->id] === $question->correct_answer
            ) {
                $score++;
                $correctAnswers[] = $question->id;
            } else {
                $wrongAnswers[] = $question->id;
            }
        }

        // Calcul du pourcentage
        $percentage = ($score / $totalQuestions) * 100;

        // Enregistre ou met à jour le résultat
        UserQuizResult::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'quiz_id' => $quiz->id
            ],
            [
                'score' => $score,
                'percentage' => $percentage,
                'completed_at' => now(),
            ]
        );

        return view('quiz.result', compact(
            'score',
            'totalQuestions',
            'percentage',
            'correctAnswers',
            'wrongAnswers',
            'quiz'
        ));
    }

    public function results()
    {
        $results = UserQuizResult::where('user_id', auth()->id())
            ->with('quiz')
            ->orderBy('completed_at', 'desc')
            ->get();

        return view('quiz.results', compact('results'));
    }
}
