@extends('layouts.app')

@section('title', 'Les Fonctions en PHP')

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
                        <a class="nav-link" href="#section1">Définition des fonctions</a>
                        <a class="nav-link" href="#section2">Paramètres et arguments</a>
                        <a class="nav-link" href="#section3">Retour de valeurs</a>
                        <a class="nav-link" href="#section4">Portée des variables</a>
                        <a class="nav-link" href="#section5">Fonctions anonymes</a>
                        <a class="nav-link" href="#section6">Fonctions natives</a>
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
                    <h1 class="mb-4">Chapitre 4 : Les Fonctions</h1>

                    <section id="section1" class="mb-5">
                        <h2>Définition des fonctions</h2>
                        <p>Les fonctions sont des blocs de code réutilisables qui effectuent une tâche spécifique.</p>

                        <div class="code-block">
                            <pre><code>
function direBonjour() {
    echo "Bonjour !";
}

// Appel de la fonction
direBonjour();
                            </code></pre>
                        </div>

                        <div class="alert alert-info">
                            <i class="fas fa-info-circle"></i> Les noms de fonctions ne sont pas sensibles à la casse,
                            mais il est recommandé d'être cohérent.
                        </div>
                    </section>

                    <section id="section2" class="mb-5">
                        <h2>Paramètres et arguments</h2>
                        <p>Les fonctions peuvent accepter des paramètres pour être plus flexibles.</p>

                        <h4>Paramètres obligatoires</h4>
                        <div class="code-block">
                            <pre><code>
function saluer($nom) {
    echo "Bonjour $nom !";
}

saluer("Jean"); // Affiche: Bonjour Jean !
                            </code></pre>
                        </div>

                        <h4>Paramètres optionnels</h4>
                        <div class="code-block">
                            <pre><code>
function saluerAvecTitre($nom, $titre = "M.") {
    echo "Bonjour $titre $nom !";
}

saluerAvecTitre("Dupont"); // Affiche: Bonjour M. Dupont !
saluerAvecTitre("Dupont", "Dr."); // Affiche: Bonjour Dr. Dupont !
                            </code></pre>
                        </div>

                        <h4>Arguments nommés (PHP 8+)</h4>
                        <div class="code-block">
                            <pre><code>
function creerUtilisateur($nom, $email, $age) {
    // ...
}

creerUtilisateur(
    nom: "Jean",
    email: "jean@example.com",
    age: 25
);
                            </code></pre>
                        </div>
                    </section>

                    <section id="section3" class="mb-5">
                        <h2>Retour de valeurs</h2>
                        <p>Les fonctions peuvent renvoyer des valeurs avec l'instruction return.</p>

                        <div class="code-block">
                            <pre><code>
function addition($a, $b) {
    return $a + $b;
}

$resultat = addition(5, 3); // $resultat = 8

// Retours multiples avec array
function getInfosUtilisateur() {
    return ["Jean", 25, "jean@example.com"];
}

[$nom, $age, $email] = getInfosUtilisateur();
                            </code></pre>
                        </div>

                        <h4>Types de retour (PHP 7+)</h4>
                        <div class="code-block">
                            <pre><code>
function calculerAge(string $dateNaissance): int {
    // Calcul de l'âge
    return $age;
}
                            </code></pre>
                        </div>
                    </section>

                    <section id="section4" class="mb-5">
                        <h2>Portée des variables</h2>
                        <p>La portée détermine où une variable peut être accessible.</p>

                        <div class="code-block">
                            <pre><code>
$globale = "Je suis globale";

function testPortee() {
    global $globale; // Accès à la variable globale
    $locale = "Je suis locale";
    echo $globale;
}

// Variables statiques
function compteur() {
    static $count = 0;
    return ++$count;
}
                            </code></pre>
                        </div>
                    </section>

                    <section id="section5" class="mb-5">
                        <h2>Fonctions anonymes</h2>
                        <p>Les fonctions anonymes (closures) sont des fonctions sans nom.</p>

                        <div class="code-block">
                            <pre><code>
$dire = function($mot) {
    echo $mot;
};

$dire("Bonjour");

// Utilisation comme callback
$nombres = [1, 2, 3, 4];
$doubles = array_map(function($n) {
    return $n * 2;
}, $nombres);
                            </code></pre>
                        </div>
                    </section>

                    <section id="section6" class="mb-5">
                        <h2>Fonctions natives</h2>
                        <p>PHP dispose de nombreuses fonctions intégrées.</p>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Catégorie</th>
                                        <th>Exemples de fonctions</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Chaînes</td>
                                        <td>strlen(), substr(), str_replace()</td>
                                        <td>Manipulation de chaînes</td>
                                    </tr>
                                    <tr>
                                        <td>Tableaux</td>
                                        <td>array_push(), array_pop(), sort()</td>
                                        <td>Manipulation de tableaux</td>
                                    </tr>
                                    <tr>
                                        <td>Math</td>
                                        <td>round(), ceil(), floor()</td>
                                        <td>Opérations mathématiques</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <!-- Exercices pratiques -->
                    <div class="card mt-4">
                        <div class="card-header bg-light">
                            <h3 class="mb-0">Exercices pratiques</h3>
                        </div>
                        <div class="card-body">
                            <div class="exercise mb-4">
                                <h4>Exercice 1</h4>
                                <p>Créez une fonction qui calcule la moyenne d'un tableau de nombres.</p>
                                <div class="code-editor" id="exercise1">
                                    <textarea class="form-control" rows="6">
function calculerMoyenne($nombres) {
    // Votre code ici
}

// Test
$notes = [15, 12, 18, 9];
echo calculerMoyenne($notes);
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
                                    <p>Que fait l'instruction return ?</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="1">
                                        <label class="form-check-label">Elle arrête le script</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="2">
                                        <label class="form-check-label">Elle renvoie une valeur et termine la
                                            fonction</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Vérifier</button>
                            </form>
                        </div>
                    </div>

                    <!-- Navigation entre chapitres -->
                    <div class="d-flex justify-content-between mt-4">
                        <!-- Lien vers le chapitre précédent -->
                        @if ($currentChapterId > 1)
                            <a href="{{ route('chapter', ['id' => $currentChapterId - 1]) }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Chapitre précédent
                            </a>
                        @endif

                        <!-- Lien vers le chapitre suivant -->
                        @if ($currentChapterId < $totalChapters)
                            <a href="{{ route('chapter', ['id' => $currentChapterId + 1]) }}" class="btn btn-primary">
                                Chapitre suivant <i class="fas fa-arrow-right"></i>
                            </a>
                        @endif
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
    document.addEventListener('DOMContentLoaded', function () {
        // Gestion du quiz et de la navigation
        document.getElementById('chapter-quiz').addEventListener('submit', function (e) {
            e.preventDefault();
            // Logique de vérification du quiz
        });

        // Navigation fluide
        document.querySelectorAll('#navbar-chapter .nav-link').forEach(function (navLink) {
            navLink.addEventListener('click', function (e) {
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