@extends('layouts.app')

@section('title', 'Routes et Contrôleurs')

@section('content')
<div class="container">
    <div class="row">
        <!-- Sidebar de navigation -->
        <div class="col-md-3">
            <div class="card shadow mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Dans ce chapitre</h5>
                </div>
                <div class="card-body">
                    <nav id="navbar-chapter" class="nav flex-column">
                        <a class="nav-link" href="#section1">Introduction aux routes et contrôleurs</a>
                        <a class="nav-link" href="#section2">Définition des routes</a>
                        <a class="nav-link" href="#section3">Définition des contrôleurs</a>
                        <a class="nav-link" href="#section4">Liaison des routes aux contrôleurs</a>
                        <a class="nav-link" href="#section5">Passage de paramètres aux contrôleurs</a>
                        <a class="nav-link" href="#section6">Utilisation des méthodes HTTP</a>
                        <a class="nav-link" href="#section7">Gestion des erreurs</a>
                    </nav>
                </div>
            </div>

            <div class="progress mb-3">
                <div class="progress-bar" role="progressbar" style="width: {{ $progress ?? 0 }}%">
                    {{ $progress ?? 0 }}% complété
                </div>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class="col-md-9">
            <div class="card shadow">
                <div class="card-body">
                    <h1 class="mb-4">Chapitre 10 : Routes et Contrôleurs</h1>

                    <section id="section1" class="mb-5">
                        <h2>Introduction aux routes et contrôleurs</h2>
                        <p>Les routes et les contrôleurs sont les éléments clés de Laravel.</p>
                        <p>Les routes définissent les chemins que les utilisateurs peuvent emprunter pour accéder à votre application.</p>
                        <p>Les contrôleurs traitent les requêtes des utilisateurs et renvoient des réponses.</p>
                    </section>

                    <section id="section2" class="mb-5">
                        <h2>Définition des routes</h2>
                        <p>Les routes sont définies dans les fichiers de route, qui sont situés dans le dossier routes de votre application.</p>
                        <p>Il existe plusieurs types de routes, notamment les routes web, les routes API et les routes de console.</p>
                        <code>
                            Route::get('/', function () {
                            return view('welcome');
                            });
                        </code>
                    </section>

                    <section id="section3" class="mb-5">
                        <h2>Définition des contrôleurs</h2>
                        <p>Les contrôleurs sont des classes qui traitent les requêtes des utilisateurs et renvoient des réponses.</p>
                        <p>Les contrôleurs sont situés dans le dossier app/Http/Controllers de votre application.</p>
                        <code>
                            namespace App\Http\Controllers;

                            use Illuminate\Http\Request;

                            class WelcomeController extends Controller
                            {
                            public function index()
                            {
                            return view('welcome');
                            }
                            }
                        </code>
                    </section>

                    <section id="section4" class="mb-5">
                        <h2>Liaison des routes aux contrôleurs</h2>
                        <p>Les routes peuvent être liées aux contrôleurs pour traiter les requêtes des utilisateurs.</p>
                        <code>
                            Route::get('/', 'WelcomeController@index');
                        </code>
                    </section>

                    <section id="section5" class="mb-5">
                        <h2>Passage de paramètres aux contrôleurs</h2>
                        <p>Les paramètres peuvent être passés aux contrôleurs pour traiter les requêtes des utilisateurs.</p>
                        <code>
                            Route::get('/{id}', 'WelcomeController@index');
                        </code>
                        <code>
                            namespace App\Http\Controllers;

                            use Illuminate\Http\Request;

                            class WelcomeController extends Controller
                            {
                            public function index($id)
                            {
                            return view('welcome', compact('id'));
                            }
                            }
                        </code>
                    </section>

                    <section id="section6" class="mb-5">
                        <h2>Utilisation des méthodes HTTP</h2>
                        <p>Les méthodes HTTP peuvent être utilisées pour traiter les requêtes des utilisateurs.</p>
                        <ul>
                            <li>GET : pour récupérer des données</li>
                            <li>POST : pour créer des données</li>
                            <li>PUT : pour mettre à jour des données</li>
                            <li>DELETE : pour supprimer des données</li>
                        </ul>
                        <code>
                            Route::get('/{id}', 'WelcomeController@get');
                            Route::post('/{id}', 'WelcomeController@post');
                            Route::put('/{id}', 'WelcomeController@put');
                            Route::delete('/{id}', 'WelcomeController@delete');
                        </code>
                    </section>

                    <section id="section7" class="mb-5">
                        <h2>Gestion des erreurs</h2>
                        <p>Les erreurs peuvent être gérées en utilisant les exceptions et les codes de statut.</p>
                        <code>
                            try {
                            // Code qui peut occasionner une erreur
                            } catch (Exception $e) {
                            // Gestion de l'erreur
                            return response()->json(['error' => $e->getMessage()], 500);
                            }
                        </code>
                    </section>

                    <!-- Exercices pratiques -->
                    <div class="card mt-4">
                        <div class="card-header bg-light">
                            <h3 class="mb-0">Exercices pratiques</h3>
                        </div>
                        <div class="card-body">
                            <div class="exercise mb-4">
                                <h4>Exercice 1</h4>
                                <p>Créez une nouvelle route pour afficher une page de bienvenue.</p>
                                <div class="code-editor" id="exercise1">
                                    <textarea class="form-control" rows="8">
Route::get('/', function () {
    return view('welcome');
});
                                    </textarea>
                                    <button class="btn btn-primary mt-2" onclick="verifyExercise1()">Vérifier</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quiz -->
                    <div class="card mt-4">
                        <div class="card-header bg-light">
                            <h3 class="mb-0">Quiz rapide</h3>
                        </div>
                        <div class="card-body">
                            <form id="chapter-quiz">
                                <div class="mb-3">
                                    <p>Quel est le dossier où sont situées les routes de votre application ?</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="1">
                                        <label class="form-check-label">app</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="2">
                                        <label class="form-check-label">routes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="3">
                                        <label class="form-check-label">config</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Vérifier</button>
                            </form>
                        </div>
                    </div>

                    <!-- Navigation entre chapitres -->
                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('chapter9') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Chapitre précédent
                        </a>
                        <a href="{{ route('chapter11') }}" class="btn btn-primary">
                            Chapitre suivant <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .code-block {
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 5px;
        margin: 10px 0;
    }

    .code-editor textarea {
        font-family: monospace;
        resize: vertical;
    }
</style>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gestion du quiz
        document.getElementById('chapter-quiz').addEventListener('submit', function(e) {
            e.preventDefault();
            // Logique de vérification du quiz
        });

        // Navigation fluide
        document.querySelectorAll('#navbar-chapter .nav-link').forEach(function(navLink) {
            navLink.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });

    function verifyExercise1() {
        // Logique de vérification de l'exercice
    }
</script>
@endsection