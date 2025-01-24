@extends('layouts.app')

@section('title', 'Installation de Laravel')

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
                        <a class="nav-link" href="#section1">Introduction à l'installation de Laravel</a>
                        <a class="nav-link" href="#section2">Prérequis pour l'installation de Laravel</a>
                        <a class="nav-link" href="#section3">Téléchargement et installation de Laravel</a>
                        <a class="nav-link" href="#section4">Configuration de Laravel</a>
                        <a class="nav-link" href="#section5">Lancement de Laravel</a>
                        <a class="nav-link" href="#section6">Résolution des problèmes courants</a>
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
                    <h1 class="mb-4">Chapitre 8 : Installation de Laravel</h1>

                    <section id="section1" class="mb-5">
                        <h2>Introduction à l'installation de Laravel</h2>
                        <p>L'installation de Laravel est un processus simple et rapide.</p>
                        <p>Il existe plusieurs méthodes pour installer Laravel, nous allons voir les plus courantes dans
                            ce chapitre.</p>
                    </section>

                    <section id="section2" class="mb-5">
                        <h2>Prérequis pour l'installation de Laravel</h2>
                        <p>Avant de commencer l'installation de Laravel, assurez-vous que vous avez les prérequis
                            suivants :</p>
                        <ul>
                            <li>PHP 7.3 ou supérieur</li>
                            <li>Composer</li>
                            <li>Un serveur web (Apache, Nginx, etc.)</li>
                            <li>Une base de données (MySQL, PostgreSQL, etc.)</li>
                        </ul>
                    </section>

                    <section id="section3" class="mb-5">
                        <h2>Téléchargement et installation de Laravel</h2>
                        <p>Il existe plusieurs façons de télécharger et d'installer Laravel :</p>
                        <ol>
                            <li>En utilisant Composer :
                                <code>composer create-project --prefer-dist laravel/laravel projet-laravel</code></li>
                            <li>En téléchargeant le fichier zip depuis le site officiel de Laravel</li>
                        </ol>
                    </section>

                    <section id="section4" class="mb-5">
                        <h2>Configuration de Laravel</h2>
                        <p>Une fois Laravel installé, vous devez configurer quelques paramètres pour que votre
                            application fonctionne correctement.</p>
                        <ul>
                            <li>Configurer la base de données dans le fichier .env</li>
                            <li>Exécuter les migrations pour créer les tables de la base de données</li>
                        </ul>
                    </section>

                    <section id="section5" class="mb-5">
                        <h2>Lancement de Laravel</h2>
                        <p>Une fois que vous avez configuré Laravel, vous pouvez lancer votre application en exécutant
                            la commande suivante :</p>
                        <code>php artisan serve</code>
                    </section>

                    <section id="section6" class="mb-5">
                        <h2>Résolution des problèmes courants</h2>
                        <p>Voici quelques problèmes courants que vous pouvez rencontrer lors de l'installation de
                            Laravel et comment les résoudre :</p>
                        <ul>
                            <li>Erreur de dépendance : assurez-vous que vous avez installé toutes les dépendances
                                requises</li>
                            <li>Erreur de base de données : assurez-vous que vous avez configuré correctement la base de
                                données</li>
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
                                <p>Installez Laravel en utilisant Composer.</p>
                                <div class="code-editor" id="exercise1">
                                    <textarea class="form-control" rows="8">
composer create-project --prefer-dist laravel/laravel projet-laravel
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
                                    <p>Quel est le prérequis minimum pour PHP pour installer Laravel ?</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="1">
                                        <label class="form-check-label">PHP 7.2</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="2">
                                        <label class="form-check-label">PHP 7.3</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="3">
                                        <label class="form-check-label">PHP 8.0</label>
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