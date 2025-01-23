<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\UserQuizResult;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show($chapterNumber)
    {
        $quiz = Quiz::where('chapter_number', $chapterNumber)->with('questions')->first();

        return view('quiz.show', compact('quiz'));
    }

    public function submit(Request $request, Quiz $quiz)
    {
        $answers = $request->input('answers');
        $score = 0;

        foreach ($quiz->questions as $question) {
            if (isset($answers[$question->id]) && $answers[$question->id] === $question->correct_answer) {
                $score++;
            }
        }

        UserQuizResult::create([
            'user_id' => auth()->id(),
            'quiz_id' => $quiz->id,
            'score' => $score,
            'completed_at' => now(),
        ]);

        return redirect()->back()->with('success', "Quiz terminé ! Score : $score/" . $quiz->questions->count());
    }
}
