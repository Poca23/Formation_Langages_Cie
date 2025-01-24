@extends('layouts.app')

@section('title', 'Introduction à Laravel')

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
                        <a class="nav-link" href="#section1">Qu'est-ce que Laravel ?</a>
                        <a class="nav-link" href="#section2">Historique de Laravel</a>
                        <a class="nav-link" href="#section3">Caractéristiques de Laravel</a>
                        <a class="nav-link" href="#section4">Avantages de Laravel</a>
                        <a class="nav-link" href="#section5">Utilisations de Laravel</a>
                        <a class="nav-link" href="#section6">Bonnes pratiques pour utiliser Laravel</a>
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
                    <h1 class="mb-4">Chapitre 7 : Introduction à Laravel</h1>

                    <section id="section1" class="mb-5">
                        <h2>Qu'est-ce que Laravel ?</h2>
                        <p>Laravel est un framework PHP open-source pour développer des applications web.</p>
                        <p>Il a été créé par Taylor Otwell en 2011 et est maintenant l'un des frameworks PHP les plus
                            populaires.</p>
                    </section>

                    <section id="section2" class="mb-5">
                        <h2>Historique de Laravel</h2>
                        <p>Laravel a été créé en 2011 par Taylor Otwell.</p>
                        <p>La première version de Laravel a été publiée en juin 2011.</p>
                        <p>Depuis lors, Laravel a évolué pour devenir l'un des frameworks PHP les plus populaires.</p>
                    </section>

                    <section id="section3" class="mb-5">
                        <h2>Caractéristiques de Laravel</h2>
                        <p>Laravel a plusieurs caractéristiques qui le rendent populaire parmi les développeurs.</p>
                        <ul>
                            <li>Modèle-Vue-Contrôleur (MVC) : Laravel utilise le modèle MVC pour séparer la logique de
                                l'application en trois parties.</li>
                            <li>Eloquent : Laravel dispose d'un système de gestion de bases de données appelé Eloquent.
                            </li>
                            <li>Routes : Laravel dispose d'un système de routage pour gérer les URL de l'application.
                            </li>
                            <li>Blade : Laravel dispose d'un langage de template appelé Blade pour gérer les vues de
                                l'application.</li>
                        </ul>
                    </section>

                    <section id="section4" class="mb-5">
                        <h2>Avantages de Laravel</h2>
                        <p>Laravel offre plusieurs avantages par rapport à d'autres frameworks PHP.</p>
                        <ul>
                            <li>Facile à apprendre : Laravel est relativement facile à apprendre, même pour les
                                développeurs qui n'ont pas d'expérience avec les frameworks PHP.</li>
                            <li>Rapide : Laravel est rapide et peut gérer un grand nombre de requêtes.</li>
                            <li>Sécurité : Laravel dispose de plusieurs fonctionnalités de sécurité pour protéger
                                l'application contre les attaques.</li>
                        </ul>
                    </section>

                    <section id="section5" class="mb-5">
                        <h2>Utilisations de Laravel</h2>
                        <p>Laravel est utilisé pour développer une variété d'applications web.</p>
                        <ul>
                            <li>Sites web : Laravel est utilisé pour développer des sites web pour les entreprises, les
                                organisations et les individus.</li>
                            <li>Applications e-commerce : Laravel est utilisé pour développer des applications
                                e-commerce pour les entreprises.</li>
                            <li>Applications de gestion : Laravel est utilisé pour développer des applications de
                                gestion pour les entreprises et les organisations.</li>
                        </ul>
                    </section>

                    <section id="section6" class="mb-5">
                        <h2>Bonnes pratiques pour utiliser Laravel</h2>
                        <p>Voici quelques bonnes pratiques pour utiliser Laravel.</p>
                        <ul>
                            <li>Utiliser le modèle MVC : Laravel utilise le modèle MVC pour séparer la logique de
                                l'application en trois parties.</li>
                            <li>Utiliser Eloquent : Laravel dispose d'un système de gestion de bases de données appelé
                                Eloquent.</li>
                            <li>Utiliser les routes : Laravel dispose d'un système de routage pour gérer les URL de
                                l'application.</li>
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
                                <p>Qu'est-ce que Laravel ?</p>
                                <div class="code-editor" id="exercise1">
                                    <textarea class="form-control" rows="8">
Laravel est un framework PHP open-source pour développer des applications web.
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
                                    <p>Qui a créé Laravel ?</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="1">
                                        <label class="form-check-label">Taylor Otwell</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="2">
                                        <label class="form-check-label">Jeffrey Way</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="3">
                                        <label class="form-check-label">-Dayle Rees</label>
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