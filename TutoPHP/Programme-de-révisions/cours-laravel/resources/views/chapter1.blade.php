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
                        <!-- Dynamique : Contenu du sommaire -->
                        <a class="nav-link" href="#section1">Qu'est-ce que PHP ?</a>
                        <a class="nav-link" href="#section2">Histoire de PHP</a>
                        <a class="nav-link" href="#section3">Pourquoi utiliser PHP ?</a>
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
            <div class="card shadow mb-4">
                <div class="card-body">
                    <!-- Dynamique : Titre et contenu -->
                    <h1 class="mb-4">{{ $chapter->title }}</h1>
                    {!! $chapter->content !!}
                </div>
            </div>

            <!-- Quiz rapide -->
            @if($quiz)
                <div class="card mt-4">
                    <div class="card-header bg-light">
                        <h3 class="mb-0">{{ $quiz->title }}</h3>
                    </div>
                    <div class="card-body">
                        <form id="chapter-quiz" action="{{ route('quiz.check-answer') }}" method="POST"
                            data-id="{{ $quiz->id }}">
                            @csrf
                            @foreach($quiz->questions as $question)
                                <div class="mb-3">
                                    <p>{{ $question->question_text }}</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]"
                                            value="a">
                                        <label class="form-check-label">{{ $question->option_a }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]"
                                            value="b">
                                        <label class="form-check-label">{{ $question->option_b }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]"
                                            value="c">
                                        <label class="form-check-label">{{ $question->option_c }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]"
                                            value="d">
                                        <label class="form-check-label">{{ $question->option_d }}</label>
                                    </div>
                                </div>
                            @endforeach
                            <button type="submit" class="btn btn-primary">Vérifier</button>
                        </form>
                    </div>
                </div>
            @else
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="text-muted mb-0">Aucun quiz n'est disponible pour ce chapitre pour le moment.</p>
                    </div>
                </div>
            @endif

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
                    <a href="{{ route('chapter.show', ['id' => $currentChapterId - 1]) }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Chapitre précédent
                    </a>
                @else
                    <div></div>
                @endif

                @if ($currentChapterId < $totalChapters)
                    <a href="{{ route('chapter.show', ['id' => $currentChapterId + 1]) }}" class="btn btn-primary">
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

    .form-check {
        margin-bottom: 0.5rem;
    }

    .card {
        margin-bottom: 1.5rem;
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
        const quizForm = document.getElementById('chapter-quiz');
        if (quizForm) {
            quizForm.addEventListener('submit', function (e) {
                e.preventDefault();

                const formData = new FormData(this);
                const quizId = this.getAttribute('data-id');

                fetch("{{ route('quiz.check-answer') }}", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        quiz_id: quizId,
                        answers: Object.fromEntries(formData.entries())
                    })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Bravo !',
                                text: 'Vos réponses sont correctes !',
                                confirmButtonText: 'Continuer'
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Pas tout à fait...',
                                text: 'Certaines réponses sont incorrectes. Essayez encore !',
                                confirmButtonText: 'Réessayer'
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Erreur:', error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Une erreur est survenue lors de la vérification des réponses.',
                            confirmButtonText: 'Fermer'
                        });
                    });
            });
        }
    });
</script>
@endsection