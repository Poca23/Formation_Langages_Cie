use App\Models\Chapter;

public function show()
{
$user = auth()->user();
$totalChapters = Chapter::count();
$completedChapters = $user->chapters()->wherePivot('completed', true)->count();
$progress = $totalChapters > 0 ? ($completedChapters / $totalChapters) * 100 : 0;

return view('dashboard', compact('progress'));
}