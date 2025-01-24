@extends('layouts.app')

@section('title', 'Tableaux et Objets en PHP')

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
                        <a class="nav-link" href="#section1">Tableaux indexés</a>
                        <a class="nav-link" href="#section2">Tableaux associatifs</a>
                        <a class="nav-link" href="#section3">Tableaux multidimensionnels</a>
                        <a class="nav-link" href="#section4">Manipulation de tableaux</a>
                        <a class="nav-link" href="#section5">Classes et Objets</a>
                        <a class="nav-link" href="#section6">Propriétés et Méthodes</a>
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
                    <h1 class="mb-4">Chapitre 5 : Tableaux et Objets</h1>

                    <section id="section1" class="mb-5">
                        <h2>Tableaux indexés</h2>
                        <p>Les tableaux indexés utilisent des indices numériques pour accéder aux éléments.</p>

                        <div class="code-block">
                            <pre><code>
// Création d'un tableau indexé
$fruits = ["pomme", "banane", "orange"];

// Autre syntaxe
$fruits = array("pomme", "banane", "orange");

// Accès aux éléments
echo $fruits[0]; // Affiche "pomme"

// Ajout d'un élément
$fruits[] = "fraise"; // Ajoute à la fin du tableau
                            </code></pre>
                        </div>

                        <div class="alert alert-info">
                            <i class="fas fa-info-circle"></i> Les indices commencent à 0 en PHP.
                        </div>
                    </section>

                    <section id="section2" class="mb-5">
                        <h2>Tableaux associatifs</h2>
                        <p>Les tableaux associatifs utilisent des clés nommées au lieu d'indices numériques.</p>

                        <div class="code-block">
                            <pre><code>
// Création d'un tableau associatif
$utilisateur = [
    "nom" => "Dupont",
    "prenom" => "Jean",
    "age" => 25
];

// Accès aux éléments
echo $utilisateur["nom"]; // Affiche "Dupont"

// Ajout/modification d'éléments
$utilisateur["email"] = "jean.dupont@example.com";
                            </code></pre>
                        </div>
                    </section>

                    <section id="section3" class="mb-5">
                        <h2>Tableaux multidimensionnels</h2>
                        <p>Les tableaux peuvent contenir d'autres tableaux, créant ainsi des structures
                            multidimensionnelles.</p>

                        <div class="code-block">
                            <pre><code>
// Tableau multidimensionnel
$etudiants = [
    ["nom" => "Dupont", "notes" => [15, 12, 18]],
    ["nom" => "Martin", "notes" => [14, 16, 13]]
];

// Accès aux éléments
echo $etudiants[0]["nom"]; // Affiche "Dupont"
echo $etudiants[0]["notes"][0]; // Affiche 15
                            </code></pre>
                        </div>
                    </section>

                    <section id="section4" class="mb-5">
                        <h2>Manipulation de tableaux</h2>
                        <p>PHP offre de nombreuses fonctions pour manipuler les tableaux.</p>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Fonction</th>
                                        <th>Description</th>
                                        <th>Exemple</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>array_push()</td>
                                        <td>Ajoute un élément à la fin</td>
                                        <td><code>array_push($array, "nouveau")</code></td>
                                    </tr>
                                    <tr>
                                        <td>array_pop()</td>
                                        <td>Supprime le dernier élément</td>
                                        <td><code>$dernier = array_pop($array)</code></td>
                                    </tr>
                                    <tr>
                                        <td>count()</td>
                                        <td>Compte les éléments</td>
                                        <td><code>$taille = count($array)</code></td>
                                    </tr>
                                    <tr>
                                        <td>sort()</td>
                                        <td>Trie le tableau</td>
                                        <td><code>sort($array)</code></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="code-block">
                            <pre><code>
// Exemples de manipulation
$nombres = [3, 1, 4, 1, 5];
sort($nombres);
print_r($nombres);

$fruits = ["pomme", "banane"];
array_push($fruits, "orange");
print_r($fruits);
                            </code></pre>
                        </div>
                    </section>

                    <section id="section5" class="mb-5">
                        <h2>Classes et Objets</h2>
                        <p>PHP est un langage orienté objet qui permet de créer des classes et des objets.</p>

                        <div class="code-block">
                            <pre><code>
class Personne {
    // Propriétés
    public $nom;
    public $age;

    // Constructeur
    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
    }

    // Méthode
    public function sePresenter() {
        return "Je m'appelle {$this->nom} et j'ai {$this->age} ans.";
    }
}

// Création d'un objet
$jean = new Personne("Jean", 25);
echo $jean->sePresenter();
                            </code></pre>
                        </div>
                    </section>

                    <section id="section6" class="mb-5">
                        <h2>Propriétés et Méthodes</h2>
                        <p>Les classes peuvent avoir différents niveaux de visibilité pour leurs propriétés et méthodes.
                        </p>

                        <div class="code-block">
                            <pre><code>
class Compte {
    // Propriétés privées
    private $solde = 0;
    
    // Méthode publique
    public function deposer($montant) {
        if ($montant > 0) {
            $this->solde += $montant;
            return true;
        }
        return false;
    }
    
    // Méthode publique
    public function getSolde() {
        return $this->solde;
    }
}

$compte = new Compte();
$compte->deposer(100);
echo $compte->getSolde(); // Affiche 100
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
                                <h4>Exercice 1 : Manipulation de tableau</h4>
                                <p>Créez un tableau de nombres et écrivez une fonction pour calculer la somme de tous
                                    les éléments.</p>
                                <div class="code-editor" id="exercise1">
                                    <textarea class="form-control" rows="6">
$nombres = [1, 2, 3, 4, 5];

function calculerSomme($tableau) {
    // Votre code ici
}

echo calculerSomme($nombres);
                                    </textarea>
                                    <button class="btn btn-primary mt-2" onclick="verifyExercise1()">Vérifier</button>
                                </div>
                            </div>

                            <div class="exercise">
                                <h4>Exercice 2 : Création de classe</h4>
                                <p>Créez une classe Voiture avec des propriétés et des méthodes.</p>
                                <div class="code-editor" id="exercise2">
                                    <textarea class="form-control" rows="8">
class Voiture {
    // Votre code ici
}
                                    </textarea>
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
                                    <p>Quelle fonction permet de compter les éléments d'un tableau ?</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="1">
                                        <label class="form-check-label">size()</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="2">
                                        <label class="form-check-label">count()</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="3">
                                        <label class="form-check-label">length()</label>
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
        // Gestion du quiz
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
        // Logique de vérification de l'exercice 1
    }

    function verifyExercise2() {
        // Logique de vérification de l'exercice 2
    }
</script>
@endsection