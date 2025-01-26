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
public function show($id)
{
$chapter = Chapter::findOrFail($id); // Assurez-vous que l'enregistrement existe.
$totalChapters = Chapter::count();
$progress = 50; // Exemple ou calcul
$isCompleted = true; // Exemple ou logique réelle

return view('chapters.show', [
'chapter' => $chapter,
'progress' => $progress,
'isCompleted' => $isCompleted,
'currentChapterId' => $id,
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