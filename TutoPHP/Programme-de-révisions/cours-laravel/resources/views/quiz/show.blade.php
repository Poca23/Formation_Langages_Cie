@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $quiz->title }}</h2>
    <p>{{ $quiz->description }}</p>

    <form method="POST" action="{{ route('quiz.submit', $quiz) }}">
        @csrf
        @foreach($quiz->questions as $question)
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $question->question_text }}</h5>

                <div class="form-check">
                    <input type="radio" name="answers[{{ $question->id }}]" value="a" required>
                    <label>{{ $question->option_a }}</label>
                </div>

                <div class="form-check">
                    <input type="radio" name="answers[{{ $question->id }}]" value="b">
                    <label>{{ $question->option_b }}</label>
                </div>

                <div class="form-check">
                    <input type="radio" name="answers[{{ $question->id }}]" value="c">
                    <label>{{ $question->option_c }}</label>
                </div>

                <div class="form-check">
                    <input type="radio" name="answers[{{ $question->id }}]" value="d">
                    <label>{{ $question->option_d }}</label>
                </div>
            </div>
        </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Soumettre le Quiz</button>
    </form>
</div>
@endsection