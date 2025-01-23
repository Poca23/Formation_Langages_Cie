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
                <div class="progress-bar" role="progressbar" style="width: {{ $progress ?? 0 }}%">
                    {{ $progress ?? 0 }}% complété
                </div>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class="col-md-9">
            <section id="section1" class="mb-5">
                <h2>Qu'est-ce que PHP ?</h2>
                <p>PHP (Hypertext Preprocessor) est un langage de programmation côté serveur...</p>
            </section>

            <section id="section2" class="mb-5">
                <h2>Histoire de PHP</h2>
                <p>PHP a été créé en 1994...</p>
            </section>

            <section id="section3" class="mb-5">
                <h2>Pourquoi utiliser PHP ?</h2>
                <ul>
                    <li>Facile à apprendre</li>
                    <li>Compatible avec la plupart des serveurs</li>
                </ul>
            </section>

            <!-- Navigation entre chapitres -->
            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('chapter', ['id' => $currentChapterId - 1]) }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Chapitre précédent
                </a>
                <a href="{{ route('chapter', ['id' => $currentChapterId + 1]) }}" class="btn btn-primary">
                    Chapitre suivant <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection