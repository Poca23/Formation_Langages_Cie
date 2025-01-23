@extends('layouts.app')

@section('title', 'Gestion des Erreurs et Exceptions')

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
                        <a class="nav-link" href="#section1">Types d'erreurs</a>
                        <a class="nav-link" href="#section2">Gestion des erreurs</a>
                        <a class="nav-link" href="#section3">Exceptions</a>
                        <a class="nav-link" href="#section4">Try-Catch</a>
                        <a class="nav-link" href="#section5">Exceptions personnalisées</a>
                        <a class="nav-link" href="#section6">Bonnes pratiques</a>
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
                    <h1 class="mb-4">Chapitre 6 : Gestion des Erreurs et Exceptions</h1>

                    <section id="section1" class="mb-5">
                        <h2>Types d'erreurs</h2>
                        <p>PHP définit plusieurs types d'erreurs différents.</p>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Type d'erreur</th>
                                        <th>Description</th>
                                        <th>Exemple</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>E_ERROR</td>
                                        <td>Erreurs fatales qui arrêtent l'exécution</td>
                                        <td>Appel à une fonction inexistante</td>
                                    </tr>
                                    <tr>
                                        <td>E_WARNING</td>
                                        <td>Avertissements non fatals</td>
                                        <td>Division par zéro</td>
                                    </tr>
                                    <tr>
                                        <td>E_NOTICE</td>
                                        <td>Notifications pour des situations potentiellement problématiques</td>
                                        <td>Utilisation d'une variable non définie</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section id="section2" class="mb-5">
                        <h2>Gestion des erreurs</h2>
                        <p>PHP offre plusieurs moyens de gérer les erreurs.</p>

                        <div class="code-block">
                            <pre><code>
// Configuration du rapport d'erreurs
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Gestionnaire d'erreurs personnalisé
function monGestionnaireErreur($errno, $errstr, $errfile, $errline) {
    echo "Erreur [$errno] : $errstr\n";
    echo "Dans le fichier $errfile à la ligne $errline\n";
    return true;
}

set_error_handler('monGestionnaireErreur');
                            </code></pre>
                        </div>

                        <div class="alert alert-info">
                            <i class="fas fa-info-circle"></i> En production, il est recommandé de désactiver l'affichage des erreurs et de les logger à la place.
                        </div>
                    </section>

                    <section id="section3" class="mb-5">
                        <h2>Exceptions</h2>
                        <p>Les exceptions permettent une gestion plus structurée des erreurs.</p>

                        <div class="code-block">
                            <pre><code>
class MonException extends Exception {
    public function afficherMessage() {
        return "Erreur : " . $this->getMessage();
    }
}

function verifierAge($age) {
    if ($age < 0) {
        throw new Exception("L'âge ne peut pas être négatif");
    }
    return true;
}
                            </code></pre>
                        </div>
                    </section>

                    <section id="section4" class="mb-5">
                        <h2>Try-Catch</h2>
                        <p>Le bloc try-catch permet de capturer et gérer les exceptions.</p>

                        <div class="code-block">
                            <pre><code>
try {
    verifierAge(-5);
} catch (Exception $e) {
    echo "Une erreur est survenue : " . $e->getMessage();
} finally {
    echo "Ce code s'exécute toujours";
}
                            </code></pre>
                        </div>

                        <h4>Multiple Catch</h4>
                        <div class="code-block">
                            <pre><code>
try {
    // Code potentiellement dangereux
} catch (DatabaseException $e) {
    // Gestion des erreurs de base de données
} catch (FileException $e) {
    // Gestion des erreurs de fichiers
} catch (Exception $e) {
    // Gestion des autres erreurs
}
                            </code></pre>
                        </div>
                    </section>

                    <section id="section5" class="mb-5">
                        <h2>Exceptions personnalisées</h2>
                        <p>Création d'exceptions spécifiques pour votre application.</p>

                        <div class="code-block">
                            <pre><code>
class ValidationException extends Exception {
    protected $champ;

    public function __construct($message, $champ) {
        parent::__construct($message);
        $this->champ = $champ;
    }

    public function getChamp() {
        return $this->champ;
    }
}

// Utilisation
try {
    if (empty($email)) {
        throw new ValidationException("Email requis", "email");
    }
} catch (ValidationException $e) {
    echo "Erreur de validation sur le champ : " . $e->getChamp();
}
                            </code></pre>
                        </div>
                    </section>

                    <section id="section6" class="mb-5">
                        <h2>Bonnes pratiques</h2>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h5>1. Hiérarchie d'exceptions</h5>
                                <p>Créez une hiérarchie d'exceptions logique pour votre application.</p>
                            </li>
                            <li class="list-group-item">
                                <h5>2. Messages d'erreur clairs</h5>
                                <p>Fournissez des messages d'erreur descriptifs et utiles.</p>
                            </li>
                            <li class="list-group-item">
                                <h5>3. Logging</h5>
                                <p>Enregistrez les erreurs importantes pour le débogage.</p>
                            </li>
                            <li class="list-group-item">
                                <h5>4. Nettoyage</h5>
                                <p>Utilisez finally pour le nettoyage des ressources.</p>
                            </li>
                        </ul>
                    </section>

                    <!-- Exercices pratiques -->
                    <div class="card mt-4">
                        <div class="card-header bg-light">
                            <h3 class="mb-0">Exercices pratiques</h3>
                        </div>
                        <div class="card-body">
                            <div class="exercise mb-4">
                                <h4>Exercice 1</h4>
                                <p>Créez une classe d'exception personnalisée et utilisez-la dans une fonction.</p>
                                <div class="code-editor" id="exercise1">
                                    <textarea class="form-control" rows="8">
class AgeException extends Exception {
    // Votre code ici
}

function verifierAge($age) {
    // Votre code ici
}
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
                                    <p>Quelle instruction est utilisée pour lancer une exception ?</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="1">
                                        <label class="form-check-label">throw</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="2">
                                        <label class="form-check-label">catch</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="3">
                                        <label class="form-check-label">try</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Vérifier</button>
                            </form>
                        </div>
                    </div>

                    <!-- Navigation entre chapitres -->
                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('chapter5') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Chapitre précédent
                        </a>
                        <a href="{{ route('chapter7') }}" class="btn btn-primary">
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