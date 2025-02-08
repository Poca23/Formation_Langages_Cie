<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\ChapterProgress;
use App\Models\Quiz;


// Le champ 'description' est disponible mais non utilisé dans cette vue.

class ChapterController extends Controller
{
    public function show($id)
    {
        // Chargez le chapitre avec son quiz et les questions associées
        $chapter = Chapter::with(['quiz.questions'])->findOrFail($id);

        $totalChapters = Chapter::count();

        // Vérifiez si l'utilisateur a complété ce chapitre
        $isCompleted = ChapterProgress::where('user_id', auth()->id())
            ->where('chapter_number', $id)
            ->where('completed', true)
            ->exists();

        // Calculez le pourcentage de progression
        $completedChapters = ChapterProgress::where('user_id', auth()->id())
            ->where('completed', true)
            ->count();
        $progress = ($totalChapters > 0) ? ($completedChapters / $totalChapters) * 100 : 0;

        // Simplicité grâce à la relation — le quiz est déjà préchargé avec ses questions
        $quiz = $chapter->quiz;

        return view('chapters.show', [
            'chapter' => $chapter,
            'progress' => $progress,
            'isCompleted' => $isCompleted,
            'currentChapterId' => $id,
            'totalChapters' => $totalChapters,
            'quiz' => $quiz
        ]);
    }

    public function markAsCompleted(Request $request, $id)
    {
        ChapterProgress::updateOrCreate(
            [
                'user_id' => auth(),
                'chapter_number' => $id
            ],
            ['completed' => true]
        );

        return redirect()->back()->with('success', 'Chapitre marqué comme terminé !');
    }
}
