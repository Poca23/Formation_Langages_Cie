<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 12 - Développement d'une application avec Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>

<body>
    <header>
        <h1>Chapitre 12 - Développement d'une application avec Laravel</h1>
    </header>

    <main>

    <a href="{{ route('home') }}">Retour au Sommaire</a>


        <section class="collapsible" id="chapter12">
            <h2 class="collapsible-header">Création d'une petite application CRUD (Créer, Lire, Mettre à jour,
                Supprimer)</h2>
            <div class="collapsible-content">
                <p>Dans ce chapitre, nous allons créer une petite application CRUD avec Laravel. Nous allons permettre à
                    l'utilisateur de créer, lire, mettre à jour et supprimer des éléments dans la base de données.</p>

                <h3>Étape 1 - Création des routes</h3>
                <p>Nous allons commencer par définir les routes nécessaires dans le fichier
                    <strong>routes/web.php</strong> pour afficher les éléments, en ajouter de nouveaux, les mettre à jour et les supprimer :
                </p>
                <pre><code>use App\Models\Element;

Route::get('/elements', [ElementController::class, 'index']);
Route::get('/elements/create', [ElementController::class, 'create']);
Route::post('/elements', [ElementController::class, 'store']);
Route::get('/elements/{element}/edit', [ElementController::class, 'edit']);
Route::put('/elements/{element}', [ElementController::class, 'update']);
Route::delete('/elements/{element}', [ElementController::class, 'destroy']);</code></pre>

                <h3>Étape 2 - Création du contrôleur</h3>
                <p>Ensuite, nous allons créer un contrôleur <strong>ElementController</strong> pour gérer la logique
                    métier des actions CRUD.
                    Utilisez la commande Artisan suivante :</p>
                <pre><code>php artisan make:controller ElementController</code></pre>

                <p>Une fois le contrôleur créé, ouvrez-le dans le fichier
                    <strong>app/Http/Controllers/ElementController.php</strong> et définissez
                    les méthodes suivantes :
                </p>

                <h4>Méthode pour afficher tous les éléments</h4>
                <pre><code>public function index()
{
    $elements = Element::all();
    return view('elements.index', compact('elements'));
}</code></pre>

                <h4>Méthode pour afficher le formulaire de création</h4>
                <pre><code>public function create()
{
    return view('elements.create');
}</code></pre>

                <h4>Méthode pour stocker un élément</h4>
                <pre><code>public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
    ]);

    Element::create($validated);
    return redirect('/elements');
}</code></pre>

                <h4>Méthode pour afficher le formulaire d'édition</h4>
                <pre><code>public function edit(Element $element)
{
    return view('elements.edit', compact('element'));
}</code></pre>

                <h4>Méthode pour mettre à jour un élément</h4>
                <pre><code>public function update(Request $request, Element $element)
{
    $validated = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
    ]);

    $element->update($validated);
    return redirect('/elements');
}</code></pre>

                <h4>Méthode pour supprimer un élément</h4>
                <pre><code>public function destroy(Element $element)
{
    $element->delete();
    return redirect('/elements');
}</code></pre>

                <p>Chaque méthode correspond à une opération CRUD, comme afficher tous les éléments, ajouter un nouvel
                    élément,
                    modifier un élément ou supprimer un élément.</p