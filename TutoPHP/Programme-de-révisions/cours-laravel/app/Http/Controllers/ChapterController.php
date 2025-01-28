<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\ChapterProgress;
use App\Models\Quiz;
use App\Models\Question;

class ChapterController extends Controller
{
    public function show($id)
    {
        $chapter = Chapter::findOrFail($id);
        $totalChapters = Chapter::count();

        // Récupérer le quiz et ses questions pour ce chapitre
        $quiz = Quiz::where('chapter_number', $id)->with('questions')->first();

        $isCompleted = ChapterProgress::where('user_id', auth()->id())
            ->where('chapter_id', $id)
            ->where('completed', true)
            ->exists();

        $completedChapters = ChapterProgress::where('user_id', auth()->id())
            ->where('completed', true)
            ->count();
        $progress = ($totalChapters > 0) ? ($completedChapters / $totalChapters) * 100 : 0;

        // Retourner la vue correspondante au chapitre
        return view("chapters.show", [
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
                'user_id' => auth()->id(),
                'chapter_id' => $id
            ],
            ['completed' => true]
        );

        return redirect()->back()->with('success', 'Chapitre marqué comme terminé !');
    }
}
