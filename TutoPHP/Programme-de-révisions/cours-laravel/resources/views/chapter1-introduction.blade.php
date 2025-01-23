@extends('layouts.app')

@section('title', 'Introduction à PHP')

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
                        <a class="nav-link" href="#section1">Qu'est-ce que PHP ?</a>
                        <a class="nav-link" href="#section2">Histoire de PHP</a>
                        <a class="nav-link" href="#section3">Pourquoi utiliser PHP ?</a>
                        <a class="nav-link" href="#section4">Configuration de l'environnement</a>
                        <a class="nav-link" href="#section5">Premier script PHP</a>
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
                    <h1 class="mb-4">Chapitre 1 : Introduction à PHP</h1>

                    <section id="section1" class="mb-5">
                        <h2>Qu'est-ce que PHP ?</h2>
                        <p>PHP (Hypertext Preprocessor) est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP.</p>
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle"></i> PHP est un langage de script côté serveur.
                        </div>
                    </section>

                    <section id="section2" class="mb-5">
                        <h2>Histoire de PHP</h2>
                        <p>Créé en 1994 par Rasmus Lerdorf, PHP a évolué pour devenir l'un des langages les plus utilisés pour le développement web.</p>
                        <div class="timeline">
                            <div class="timeline-item">
                                <h4>1994</h4>
                                <p>Création de PHP/FI</p>
                            </div>
                            <div class="timeline-item">
                                <h4>1997</h4>
                                <p>PHP 3.0</p>
                            </div>
                            <div class="timeline-item">
                                <h4>2000</h4>
                                <p>PHP 4.0</p>
                            </div>
                            <!-- etc. -->
                        </div>
                    </section>

                    <section id="section3" class="mb-5">
                        <h2>Pourquoi utiliser PHP ?</h2>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <i class="fas fa-check text-success"></i> Facile à apprendre
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-check text-success"></i> Grande communauté
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-check text-success"></i> Compatible avec la plupart des serveurs web
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-check text-success"></i> Nombreux frameworks disponibles
                            </li>
                        </ul>
                    </section>

                    <section id="section4" class="mb-5">
                        <h2>Configuration de l'environnement</h2>
                        <div class="code-block">
                            <pre><code>
# Installation sur Windows
1. Télécharger XAMPP
2. Installer XAMPP
3. Démarrer Apache

# Installation sur Linux
sudo apt-get install php apache2
                            </code></pre>
                        </div>
                    </section>

                    <section id="section5" class="mb-5">
                        <h2>Premier script PHP</h2>
                        <div class="code-block">
                            <pre><code>
&lt;?php
    echo "Hello, World!";
?&gt;
                            </code></pre>
                        </div>
                        <div class="alert alert-success">
                            <i class="fas fa-lightbulb"></i> Essayez ce code dans votre environnement local !
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
                                    <p>Que signifie PHP ?</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="1">
                                        <label class="form-check-label">Personal Home Page</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="2">
                                        <label class="form-check-label">Hypertext Preprocessor</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Vérifier</button>
                            </form>
                        </div>
                    </div>

                    <!-- Navigation entre chapitres -->
                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('sommaire') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Sommaire
                        </a>
                        <a href="{{ route('chapter2') }}" class="btn btn-primary">
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
    .timeline {
        position: relative;
        padding: 20px 0;
    }

    .timeline-item {
        padding: 10px 0;
        border-left: 2px solid #007bff;
        margin-left: 20px;
        padding-left: 20px;
    }

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

        // Spy scroll pour la navigation
        document.querySelectorAll('#navbar-chapter .nav-link').forEach(function(navLink) {
            navLink.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script>
@endsection