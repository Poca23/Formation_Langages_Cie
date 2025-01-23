@extends('layouts.app')

@section('title', 'Bonnes pratiques de déploiement avec Laravel')

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
                        <a class="nav-link" href="#section1">Introduction</a>
                        <a class="nav-link" href="#section2">Préparation au déploiement</a>
                        <a class="nav-link" href="#section3">Déploiement sur un serveur</a>
                        <a class="nav-link" href="#section4">Mises à jour et maintenance</a>
                        <a class="nav-link" href="#section5">Résumé et meilleures pratiques</a>
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
                    <h1 class="mb-4">Chapitre 14 : Bonnes pratiques de déploiement avec Laravel</h1>

                    <section id="section1" class="mb-5">
                        <h2>Introduction</h2>
                        <p>Le déploiement d'une application Laravel doit être effectué avec soin pour garantir une performance optimale et une sécurité renforcée. Dans ce chapitre, nous examinerons les étapes importantes du déploiement et les meilleures pratiques à suivre.</p>
                    </section>

                    <section id="section2" class="mb-5">
                        <h2>Préparation au déploiement</h2>
                        <p>Avant de déployer votre application, assurez-vous de bien la préparer. Cela inclut :</p>
                        <ul>
                            <li>Vérifier les dépendances dans <code>composer.json</code>.</li>
                            <li>Configurer les variables d'environnement dans votre fichier <code>.env</code>.</li>
                            <li>Exécuter les migrations et seeding de la base de données.</li>
                        </ul>
                    </section>

                    <section id="section3" class="mb-5">
                        <h2>Déploiement sur un serveur</h2>
                        <p>Pour déployer votre application sur un serveur, vous pouvez suivre ces étapes :</p>
                        <ol>
                            <li>Choisir un environnement d'hébergement (VPS, Shared Hosting, etc.).</li>
                            <li>Configurer le serveur web (Apache, Nginx) pour qu'il pointe vers le répertoire <code>public</code> de votre application.</li>
                            <li>Transférer les fichiers de l'application vers le serveur via FTP ou SSH.</li>
                        </ol>
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle"></i> Assurez-vous que les fichiers de votre application ont les bonnes permissions.
                        </div>
                    </section>

                    <section id="section4" class="mb-5">
                        <h2>Mises à jour et maintenance</h2>
                        <p>Après le déploiement, il est essentiel de gérer correctement les mises à jour et la maintenance :</p>
                        <ul>
                            <li>Utilisez les commandes <code>php artisan migrate</code> et <code>php artisan db:seed</code> pour mettre à jour la base de données.</li>
                            <li>Surveillez les logs d'erreurs pour résoudre tout problème rapidement.</li>
                            <li>Planifiez des sauvegardes régulières de la base de données et des fichiers de l'application.</li>
                        </ul>
                    </section>

                    <section id="section5" class="mb-5">
                        <h2>Résumé et meilleures pratiques</h2>
                        <p>En résumé, assurez-vous de :</p>
                        <ul>
                            <li>Suivre les étapes de préparation avec rigueur.</li>
                            <li>Déployer dans un environnement de production sécurisé.</li>
                            <li>Mettre en place un processus de maintenance efficace.</li>
                        </ul>
                    </section>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('chapter13') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Chapitre précédent
                        </a>
                        <a href="{{ route('chapter15') }}" class="btn btn-primary">
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
</style>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Script pour gérer des fonctionnalités spécifiques au chapitre, si nécessaire
    });
</script>
@endsection