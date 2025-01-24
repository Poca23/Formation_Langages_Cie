@extends('layouts.app')

@section('title', 'Chapitre 1 : Introduction à PHP')

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
                    </nav>
                </div>
            </div>

            <!-- Barre de progression -->
            <div class="progress mb-3">
                <div class="progress-bar bg-success" role="progressbar" style="width: {{ $progress ?? 0 }}%">
                    {{ $progress ?? 0 }}% complété
                </div>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class="col-md-9">
            <section id="section1" class="mb-5">
                <h2>Qu'est-ce que PHP ?</h2>
                <p>PHP (Hypertext Preprocessor) est un langage de programmation côté serveur utilisé pour le
                    développement web.</p>
            </section>

            <section id="section2" class="mb-5">
                <h2>Histoire de PHP</h2>
                <p>PHP a été créé en 1994 par Rasmus Lerdorf. Initialement utilisé pour le suivi des visiteurs, il est
                    devenu aujourd'hui l'un des langages backend les plus populaires.</p>
            </section>

            <section id="section3" class="mb-5">
                <h2>Pourquoi utiliser PHP ?</h2>
                <ul>
                    <li>Facile à apprendre et à utiliser.</li>
                    <li>Compatible avec la plupart des serveurs (Apache, Nginx, etc.).</li>
                    <li>Supporte une grande variété de bases de données comme MySQL et PostgreSQL.</li>
                </ul>
            </section>

            <!-- Navigation entre chapitres -->
            <div class="d-flex justify-content-between mt-4">
                @if ($currentChapterId > 1)
                    <a href="{{ route('chapter', ['id' => $currentChapterId - 1]) }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Chapitre précédent
                    </a>
                @endif

                @if ($currentChapterId < $totalChapters)
                    <a href="{{ route('chapter', ['id' => $currentChapterId + 1]) }}" class="btn btn-primary">
                        Chapitre suivant <i class="fas fa-arrow-right"></i>
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .progress-bar {
        transition: width 0.5s;
    }
</style>
@endsection

@section('scripts')
<script>
    // Script éventuel pour la gestion des interactions dans le chapitre
</script>
@endsection