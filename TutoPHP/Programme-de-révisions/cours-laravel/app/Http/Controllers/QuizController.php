<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use App\Models\UserQuizResult;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        return view('quiz.index', compact('quizzes'));
    }

    public function show(Quiz $quiz)
    {
        $questions = $quiz->questions;
        return view('quiz.show', compact('quiz', 'questions'));
    }

    public function checkAnswer(Request $request)
    {
        $validated = $request->validate([
            'question_id' => 'required|exists:questions,id',
            'answer' => 'required'
        ]);

        $question = Question::find($validated['question_id']);
        $isCorrect = $question->correct_answer === $validated['answer'];

        return response()->json([
            'correct' => $isCorrect,
            'explanation' => $question->explanation
        ]);
    }

    public function storeResult(Request $request)
    {
        $validated = $request->validate([
            'quiz_id' => 'required|exists:quizzes,id',
            'score' => 'required|integer|min:0',
            'total_questions' => 'required|integer|min:1'
        ]);

        UserQuizResult::create([
            'user_id' => auth()->id(),
            'quiz_id' => $validated['quiz_id'],
            'score' => $validated['score'],
            'total_questions' => $validated['total_questions']
        ]);

        return redirect()->route('quiz.index')->with('success', 'Quiz completed successfully!');
    }
}
