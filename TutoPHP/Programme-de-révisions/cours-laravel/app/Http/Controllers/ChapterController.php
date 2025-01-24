<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;

class ChapterController extends Controller
{
    /**
     * Affiche un chapitre et sa progression.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function showChapter($id)
    {
        // Vérifiez si le chapitre existe
        $chapter = Chapter::find($id);

        if (!$chapter) {
            abort(404, "Chapitre non trouvé !");
        }

        // Récupération de l'utilisateur connecté
        $user = auth()->user();

        // Vérifier si l'utilisateur a terminé ce chapitre
        $isCompleted = $user->chapters()
            ->where('chapter_id', $chapter->id)
            ->wherePivot('completed', true)
            ->exists();

        // Calcul de la progression globale dans tous les chapitres
        $totalChapters = Chapter::count();
        $completedChapters = $user->chapters()
            ->wherePivot('completed', true)
            ->count();
        $chapterProgress = $totalChapters > 0
            ? ($completedChapters / $totalChapters) * 100
            : 0;

        // Envoyer les données à la vue
        return view("chapter1", [
            'chapter' => $chapter,
            'isCompleted' => $isCompleted,
            'chapterProgress' => $chapterProgress,
            'currentChapterId' => $id,
            'totalChapters' => $totalChapters,
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
        $user = auth()->user();
        $chapter = Chapter::find($id);

        if ($chapter) {
            $user->chapters()->syncWithoutDetaching([
                $chapter->id => ['completed' => true],
            ]);
        }

        return redirect()->back()->with('success', 'Chapitre marqué comme terminé !');
    }
}