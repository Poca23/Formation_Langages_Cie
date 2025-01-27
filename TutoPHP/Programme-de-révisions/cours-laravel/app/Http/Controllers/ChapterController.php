<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\ChapterProgress;

class ChapterController extends Controller
{
    /**
     * Affiche un chapitre et sa progression.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $chapter = Chapter::findOrFail($id);
        $totalChapters = Chapter::count();

        // Vérifier si l'utilisateur a complété ce chapitre
        $isCompleted = ChapterProgress::where('user_id', auth()->id())
            ->where('chapter_id', $id)
            ->where('completed', true)
            ->exists();

        // Calculer la progression globale
        $completedChapters = ChapterProgress::where('user_id', auth()->id())
            ->where('completed', true)
            ->count();
        $progress = ($totalChapters > 0) ? ($completedChapters / $totalChapters) * 100 : 0;

        return view('quiz.show', [
            'chapter' => $chapter,
            'progress' => $progress,
            'isCompleted' => $isCompleted,
            'currentChapterId' => $id,
            'totalChapters' => $totalChapters
        ]);
    }

    /**
     * Marque un chapitre comme terminé.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
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
