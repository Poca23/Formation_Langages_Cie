@extends('layouts.app')

@section('title', 'Chapitre ' . $currentChapterId . ' : ' . $chapter->title)

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

            <!-- Barre de progression -->
            <div class="progress mb-3">
                <div class="progress-bar bg-success" role="progressbar" style="width: {{ $progress }}%">
                    {{ round($progress) }}% complété
                </div>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class="col-md-9">
            {!! $chapter->description !!}

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

            <!-- Bouton de complétion du chapitre -->
            <div class="chapter-completion mt-5 mb-4">
                @if (!$isCompleted)
                    <form action="{{ route('chapter.complete', ['id' => $currentChapterId]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success btn-lg w-100">
                            <i class="fas fa-check-circle"></i> Marquer ce chapitre comme terminé
                        </button>
                    </form>
                @else
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i> Félicitations ! Vous avez terminé ce chapitre !
                    </div>
                @endif
            </div>

            <!-- Navigation entre chapitres -->
            <div class="d-flex justify-content-between mt-4">
                @if ($currentChapterId > 1)
                    <a href="{{ route('quiz.show', ['id' => $currentChapterId - 1]) }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Chapitre précédent
                    </a>
                @else
                    <div></div>
                @endif

                @if ($currentChapterId < $totalChapters)
                    <a href="{{ route('quiz.show', ['id' => $currentChapterId + 1]) }}" class="btn btn-primary">
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

    .chapter-completion {
        border-top: 1px solid #eee;
        padding-top: 20px;
    }

    .nav-link {
        color: #333;
        padding: 8px 15px;
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    .nav-link:hover {
        background-color: #f8f9fa;
        color: #007bff;
    }

    .code-block {
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 5px;
        margin: 10px 0;
    }

    pre {
        margin-bottom: 0;
    }

    code {
        color: #e83e8c;
    }

    section {
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .btn-lg {
        padding: 15px 30px;
    }
</style>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Smooth scroll pour les liens de navigation
        document.querySelectorAll('#navbar-chapter a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Gestion du quiz
        document.getElementById('chapter-quiz').addEventListener('submit', function (e) {
            e.preventDefault();
            // Vérification des réponses
            const answers = {
                q1: '2', // $maVariable
                q2: '1' // 10 % 3 = 1
            };
            // Ajoutez ici la logique de vérification du quiz
        });
    });
</script>
@endsection