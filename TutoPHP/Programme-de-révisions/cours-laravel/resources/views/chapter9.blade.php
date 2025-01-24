@extends('layouts.app')

@section('title', 'Structure de Laravel')

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
                        <a class="nav-link" href="#section1">Introduction à la structure de Laravel</a>
                        <a class="nav-link" href="#section2">Dossier app</a>
                        <a class="nav-link" href="#section3">Dossier bootstrap</a>
                        <a class="nav-link" href="#section4">Dossier config</a>
                        <a class="nav-link" href="#section5">Dossier database</a>
                        <a class="nav-link" href="#section6">Dossier public</a>
                        <a class="nav-link" href="#section7">Dossier resources</a>
                        <a class="nav-link" href="#section8">Dossier routes</a>
                        <a class="nav-link" href="#section9">Dossier storage</a>
                        <a class="nav-link" href="#section10">Dossier tests</a>
                        <a class="nav-link" href="#section11">Dossier vendor</a>
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
                    <h1 class="mb-4">Chapitre 9 : Structure de Laravel</h1>

                    <section id="section1" class="mb-5">
                        <h2>Introduction à la structure de Laravel</h2>
                        <p>Laravel a une structure de dossier bien organisée.</p>
                        <p>Chaque dossier a un rôle spécifique dans l'application.</p>
                    </section>

                    <section id="section2" class="mb-5">
                        <h2>Dossier app</h2>
                        <p>Le dossier app contient les classes de l'application.</p>
                        <ul>
                            <li>Console : contient les commandes de console</li>
                            <li>Exceptions : contient les exceptions de l'application</li>
                            <li>Http : contient les contrôleurs et les routes de l'application</li>
                            <li>Models : contient les modèles de données de l'application</li>
                            <li>Providers : contient les fournisseurs de services de l'application</li>
                        </ul>
                    </section>

                    <section id="section3" class="mb-5">
                        <h2>Dossier bootstrap</h2>
                        <p>Le dossier bootstrap contient les fichiers de démarrage de l'application.</p>
                        <ul>
                            <li>app.php : contient la configuration de l'application</li>
                            <li>cache : contient les caches de l'application</li>
                        </ul>
                    </section>

                    <section id="section4" class="mb-5">
                        <h2>Dossier config</h2>
                        <p>Le dossier config contient les fichiers de configuration de l'application.</p>
                        <ul>
                            <li>app.php : contient la configuration de l'application</li>
                            <li>database.php : contient la configuration de la base de données</li>
                            <li>mail.php : contient la configuration de l'e-mail</li>
                        </ul>
                    </section>

                    <section id="section5" class="mb-5">
                        <h2>Dossier database</h2>
                        <p>Le dossier database contient les migrations et les modèles de données de l'application.</p>
                        <ul>
                            <li>migrations : contient les migrations de la base de données</li>
                            <li>seeds : contient les graines de la base de données</li>
                        </ul>
                    </section>

                    <section id="section6" class="mb-5">
                        <h2>Dossier public</h2>
                        <p>Le dossier public est le répertoire racine de l'application.</p>
                        <ul>
                            <li>css : contient les feuilles de style de l'application</li>
                            <li>js : contient les fichiers JavaScript de l'application</li>
                            <li>img : contient les images de l'application</li>
                        </ul>
                    </section>

                    <section id="section7" class="mb-5">
                        <h2>Dossier resources</h2>
                        <p>Le dossier resources contient les ressources de l'application.</p>
                        <ul>
                            <li>lang : contient les traductions de l'application</li>
                            <li>views : contient les vues de l'application</li>
                        </ul>
                    </section>

                    <section id="section8" class="mb-5">
                        <h2>Dossier routes</h2>
                        <p>Le dossier routes contient les routes de l'application.</p>
                        <ul>
                            <li>api.php : contient les routes API de l'application</li>
                            <li>web.php : contient les routes web de l'application</li>
                        </ul>
                    </section>

                    <section id="section9" class="mb-5">
                        <h2>Dossier storage</h2>
                        <p>Le dossier storage contient les fichiers de stockage de l'application.</p>
                        <ul>
                            <li>app : contient les fichiers de l'application</li>
                            <li>framework : contient les fichiers du framework</li>
                            <li>logs : contient les journaux de l'application</li>
                        </ul>
                    </section>

                    <section id="section10" class="mb-5">
                        <h2>Dossier tests</h2>
                        <p>Le dossier tests contient les tests de l'application.</p>
                        <ul>
                            <li>Feature : contient les tests de fonctionnalité de l'application</li>
                            <li>Unit : contient les tests unitaires de l'application</li>
                        </ul>
                    </section>

                    <section id="section11" class="mb-5">
                        <h2>Dossier vendor</h2>
                        <p>Le dossier vendor contient les dépendances de l'application.</p>
                        <ul>
                            <li>composer : contient les dépendances Composer de l'application</li>
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
                                <p>Créez un nouveau dossier dans le dossier app de l'application.</p>
                                <div class="code-editor" id="exercise1">
                                    <textarea class="form-control" rows="8">
mkdir app/MyNewFolder
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
                                    <p>Quel est le dossier qui contient les classes de l'application ?</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="1">
                                        <label class="form-check-label">app</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="2">
                                        <label class="form-check-label">bootstrap</label>
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
        // Logique de vérification de l'exercice
    }
</script>
@endsection