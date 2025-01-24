@extends('layouts.app')

@section('title', 'Chapitre 1 : Introduction à PHP')

@section('content')
<div class="container">
    <div class="row">
        <!-- Barre latérale de navigation -->
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
                <div class="progress-bar bg-success" role="progressbar" style="width: {{ $chapterProgress ?? 0 }}%;">
                    {{ number_format($chapterProgress ?? 0) }}% complété
                </div>
            </div>

            <!-- Bouton pour marquer comme terminé -->
            <div class="text-center">
                @if (!isset($isCompleted) || !$isCompleted)
                <form action="{{ route('chapter.complete', ['id' => $currentChapterId]) }}" method="POST">
                    @csrf
                    <button class="btn btn-success" type="submit">
                        Marquer comme terminé
                    </button>
                </form>
                @else
                <p class="text-success">Vous avez terminé ce chapitre !</p>
                @endif
            </div>
        </div>

        <!-- Section de contenu principal -->
        <div class="col-md-9">
            <section id="section1" class="mb-5">
                <h2>Qu'est-ce que PHP ?</h2>
                <p>PHP (Hypertext Preprocessor) est un langage de programmation côté serveur utilisé pour le
                    développement web dynamique. C'est l'un des langages les plus utilisés pour créer des applications
                    web modernes.</p>
            </section>

            <section id="section2" class="mb-5">
                <h2>Histoire de PHP</h2>
                <p>PHP a été créé par Rasmus Lerdorf en 1994. Ce qui a commencé comme une collection d'outils pour
                    suivre
                    les utilisateurs a évolué vers un langage complet, utilisé aujourd'hui dans des millions de sites
                    web.</p>
            </section>

            <section id="section3" class="mb-5">
                <h2>Pourquoi utiliser PHP ?</h2>
                <ul>
                    <li>PHP est facile à apprendre et à utiliser.</li>
                    <li>Il est puissant et compatible avec des serveurs comme Apache, Nginx, etc.</li>
                    <li>Il supporte une grande variété de bases de données, comme MySQL, PostgreSQL, SQLite.</li>
                </ul>
                <p>PHP est choisi pour ses performances, sa communauté active et son intégration facile avec des
                    frameworks puissants comme Laravel.</p>
            </section>

            <!-- Navigation entre chapitres -->
            <div class="d-flex justify-content-between mt-4">
                @if ($currentChapterId > 1)
                <a href="{{ route('chapter', ['id' => $currentChapterId - 1]) }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Chapitre précédent
                </a>
                @endif

                @if ($currentChapterId < $totalChapters) <a
                    href="{{ route('chapter', ['id' => $currentChapterId + 1]) }}" class="btn btn-primary">
                    Chapitre suivant <i class="fas fa-arrow-right"></i>
                    </a>
                    @endif
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Styles personnalisés pour le chapitre -->
@section('styles')
<style>
    .progress-bar {
        transition: width 0.5s ease;
    }
</style>
@endsection

<!-- Scripts personnalisés -->
@section('scripts')
<script>
    // Ajoutez ici des scripts spécifiques pour votre chapitre (si nécessaire)
</script>
@endsection