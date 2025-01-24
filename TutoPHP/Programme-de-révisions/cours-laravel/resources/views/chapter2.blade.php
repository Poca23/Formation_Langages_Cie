@extends('layouts.app')

@section('title', 'Les bases de PHP')

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
                        <a class="nav-link" href="#section1">Syntaxe de base</a>
                        <a class="nav-link" href="#section2">Variables et Types de données</a>
                        <a class="nav-link" href="#section3">Opérateurs</a>
                        <a class="nav-link" href="#section4">Constantes</a>
                        <a class="nav-link" href="#section5">Commentaires</a>
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
                    <h1 class="mb-4">Chapitre 2 : Les bases de PHP</h1>

                    <section id="section1" class="mb-5">
                        <h2>Syntaxe de base</h2>
                        <p>La syntaxe PHP est délimitée par les balises <code>&lt;?php</code> et <code>?&gt;</code>.</p>
                        <div class="code-block">
                            <pre><code>
&lt;?php
    // Votre code PHP ici
    echo "Bonjour";
?&gt;
                            </code></pre>
                        </div>
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle"></i> La balise de fermeture est optionnelle si le fichier
                            contient uniquement du PHP.
                        </div>
                    </section>

                    <section id="section2" class="mb-5">
                        <h2>Variables et Types de données</h2>
                        <p>En PHP, les variables commencent par le symbole $.</p>

                        <h4>Types de base :</h4>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <strong>String (chaîne)</strong>
                                <div class="code-block">
                                    <code>$nom = "John";</code>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <strong>Integer (entier)</strong>
                                <div class="code-block">
                                    <code>$age = 25;</code>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <strong>Float (décimal)</strong>
                                <div class="code-block">
                                    <code>$prix = 19.99;</code>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <strong>Boolean</strong>
                                <div class="code-block">
                                    <code>$estActif = true;</code>
                                </div>
                            </li>
                        </ul>
                    </section>

                    <section id="section3" class="mb-5">
                        <h2>Opérateurs</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Opérateur</th>
                                        <th>Description</th>
                                        <th>Exemple</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>+</td>
                                        <td>Addition</td>
                                        <td><code>$a + $b</code></td>
                                    </tr>
                                    <tr>
                                        <td>-</td>
                                        <td>Soustraction</td>
                                        <td><code>$a - $b</code></td>
                                    </tr>
                                    <tr>
                                        <td>*</td>
                                        <td>Multiplication</td>
                                        <td><code>$a * $b</code></td>
                                    </tr>
                                    <tr>
                                        <td>/</td>
                                        <td>Division</td>
                                        <td><code>$a / $b</code></td>
                                    </tr>
                                    <tr>
                                        <td>%</td>
                                        <td>Modulo</td>
                                        <td><code>$a % $b</code></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section id="section4" class="mb-5">
                        <h2>Constantes</h2>
                        <p>Les constantes sont définies avec la fonction <code>define()</code> ou le mot-clé
                            <code>const</code>.</p>
                        <div class="code-block">
                            <pre><code>
// Utilisation de define()
define('PI', 3.14159);

// Utilisation de const
const MAX_USERS = 100;

// Utilisation
echo PI; // Affiche 3.14159
echo MAX_USERS; // Affiche 100
                            </code></pre>
                        </div>
                    </section>

                    <section id="section5" class="mb-5">
                        <h2>Commentaires</h2>
                        <p>Les commentaires sont utiles pour documenter votre code.</p>
                        <div class="code-block">
                            <pre><code>
// Commentaire sur une ligne

/* 
   Commentaire
   sur plusieurs
   lignes 
*/

# Commentaire style shell
                            </code></pre>
                        </div>
                    </section>

                    <!-- Quiz rapide -->
                    <div class="card mt-4">
                        <div class="card-header bg-light">
                            <h3 class="mb-0">Quiz rapide</h3>
                        </div>
                        <div class="card-body">
                            <form id="chapter-quiz">
                                <div class="mb-3">
                                    <p>Comment déclare-t-on une variable en PHP ?</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="1">
                                        <label class="form-check-label">var maVariable</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="2">
                                        <label class="form-check-label">$maVariable</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <p>Quel est le résultat de 10 % 3 ?</p>
                                    <input type="number" class="form-control" name="q2">
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

    .nav-link.active {
        background-color: #007bff;
        color: white;
    }

    pre {
        margin-bottom: 0;
    }

    code {
        color: #e83e8c;
    }
</style>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Gestion du quiz
        document.getElementById('chapter-quiz').addEventListener('submit', function (e) {
            e.preventDefault();
            // Vérification des réponses
            const answers = {
                q1: '2', // $maVariable
                q2: '1' // 10 % 3 = 1
            };

            // Logique de vérification et feedback
        });

        // Spy scroll pour la navigation
        document.querySelectorAll('#navbar-chapter .nav-link').forEach(function (navLink) {
            navLink.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script>
@endsection