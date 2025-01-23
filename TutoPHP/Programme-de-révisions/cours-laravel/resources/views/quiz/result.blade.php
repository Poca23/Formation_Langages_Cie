@extends('layouts.app')

@section('content')
<div class="container">
    <div class="quiz-result">
        <h2>Résultats du Quiz</h2>

        <div class="score-card">
            <div class="score">
                <h3>Votre score</h3>
                <div class="score-number">{{ $score }}/{{ $totalQuestions }}</div>
                <div class="percentage">{{ round($percentage) }}%</div>
            </div>

            @if($percentage >= 70)
            <div class="alert alert-success">
                Félicitations ! Vous avez réussi ce chapitre !
            </div>
            @else
            <div class="alert alert-warning">
                Continuez vos efforts ! Vous pouvez refaire le quiz pour améliorer votre score.
            </div>
            @endif
        </div>

        <div class="actions mt-4">
            <a href="{{ route('quiz.show', $quiz->chapter_number) }}"
                class="btn btn-primary">Refaire le quiz</a>
            <a href="{{ route('chapter', $quiz->chapter_number) }}"
                class="btn btn-secondary">Revoir le chapitre</a>
            <a href="{{ route('sommaire') }}"
                class="btn btn-info">Retour au sommaire</a>
        </div>
    </div>
</div>
@endsection