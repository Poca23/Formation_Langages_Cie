@extends('layouts.app')

@section('title', 'Structures de contrôle')

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
                        <a class="nav-link" href="#section1">Conditions if/else</a>
                        <a class="nav-link" href="#section2">Switch</a>
                        <a class="nav-link" href="#section3">Boucle while</a>
                        <a class="nav-link" href="#section4">Boucle for</a>
                        <a class="nav-link" href="#section5">Boucle foreach</a>
                        <a class="nav-link" href="#section6">Break et Continue</a>
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
                    <h1 class="mb-4">Chapitre 3 : Les structures de contrôle</h1>

                    <section id="section1" class="mb-5">
                        <h2>Conditions if/else</h2>
                        <p>Les instructions conditionnelles permettent d'exécuter différents blocs de code selon des conditions.</p>

                        <div class="code-block">
                            <pre><code>
$age = 18;

if ($age >= 18) {
    echo "Vous êtes majeur";
} elseif ($age >= 16) {
    echo "Vous êtes presque majeur";
} else {
    echo "Vous êtes mineur";
}
                            </code></pre>
                        </div>

                        <div class="alert alert-info mt-3">
                            <i class="fas fa-info-circle"></i> La syntaxe alternative avec : et endif; est aussi disponible.
                        </div>

                        <h4 class="mt-4">Opérateur ternaire</h4>
                        <div class="code-block">
                            <pre><code>
$status = ($age >= 18) ? "majeur" : "mineur";
                            </code></pre>
                        </div>
                    </section>

                    <section id="section2" class="mb-5">
                        <h2>Switch</h2>
                        <p>L'instruction switch est une alternative à plusieurs if/elseif/else.</p>

                        <div class="code-block">
                            <pre><code>
$fruit = "pomme";

switch ($fruit) {
    case "pomme":
        echo "C'est une pomme";
        break;
    case "banane":
        echo "C'est une banane";
        break;
    default:
        echo "Fruit inconnu";
}
                            </code></pre>
                        </div>
                    </section>

                    <section id="section3" class="mb-5">
                        <h2>Boucle while</h2>
                        <p>La boucle while exécute un bloc de code tant qu'une condition est vraie.</p>

                        <div class="code-block">
                            <pre><code>
$i = 1;
while ($i <= 5) {
    echo $i;
    $i++;
}
                            </code></pre>
                        </div>

                        <h4 class="mt-4">Do...While</h4>
                        <div class="code-block">
                            <pre><code>
$i = 1;
do {
    echo $i;
    $i++;
} while ($i <= 5);
                            </code></pre>
                        </div>
                    </section>

                    <section id="section4" class="mb-5">
                        <h2>Boucle for</h2>
                        <p>La boucle for est utilisée quand on connaît le nombre d'itérations à l'avance.</p>

                        <div class="code-block">
                            <pre><code>
for ($i = 0; $i < 5; $i++) {
    echo "Itération $i\n";
}
                            </code></pre>
                        </div>
                    </section>

                    <section id="section5" class="mb-5">
                        <h2>Boucle foreach</h2>
                        <p>La boucle foreach est spécialement conçue pour parcourir des tableaux et des objets.</p>

                        <div class="code-block">
                            <pre><code>
$fruits = ["pomme", "banane", "orange"];

foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}

// Avec clé et valeur
$ages = ["Jean" => 25, "Marie" => 30];
foreach ($ages as $nom => $age) {
    echo "$nom a $age ans\n";
}
                            </code></pre>
                        </div>
                    </section>

                    <section id="section6" class="mb-5">
                        <h2>Break et Continue</h2>
                        <p>Les instructions break et continue permettent de contrôler le flux d'exécution des boucles.</p>

                        <div class="code-block">
                            <pre><code>
// Break
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break; // Sort de la boucle
    }
    echo $i;
}

// Continue
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        continue; // Passe à l'itération suivante
    }
    echo $i;
}
                            </code></pre>
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
                                <p>Écrivez une boucle qui affiche les nombres pairs de 0 à 10.</p>
                                <div class="code-editor" id="exercise1">
                                    <textarea class="form-control" rows="4">
for ($i = 0; $i <= 10; $i++) {
    // Votre code ici
}</textarea>
                                    <button class="btn btn-primary mt-2" onclick="verifyExercise1()">Vérifier</button>
                                </div>
                            </div>

                            <div class="exercise">
                                <h4>Exercice 2</h4>
                                <p>Créez une structure switch pour gérer différents jours de la semaine.</p>
                                <div class="code-editor" id="exercise2">
                                    <textarea class="form-control" rows="4">
$jour = "lundi";
switch ($jour) {
    // Votre code ici
}</textarea>
                                    <button class="btn btn-primary mt-2" onclick="verifyExercise2()">Vérifier</button>
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
                                    <p>Quelle instruction permet de sortir immédiatement d'une boucle ?</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="1">
                                        <label class="form-check-label">continue</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="2">
                                        <label class="form-check-label">break</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="3">
                                        <label class="form-check-label">return</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Vérifier</button>
                            </form>
                        </div>
                    </div>

                    <!-- Navigation entre chapitres -->
                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('chapter2') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Chapitre précédent
                        </a>
                        <a href="{{ route('chapter4') }}" class="btn btn-primary">
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

    .exercise {
        border-bottom: 1px solid #dee2e6;
        padding-bottom: 20px;
    }

    .exercise:last-child {
        border-bottom: none;
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
        // Logique de vérification de l'exercice 1
    }

    function verifyExercise2() {
        // Logique de vérification de l'exercice 2
    }
</script>
@endsection