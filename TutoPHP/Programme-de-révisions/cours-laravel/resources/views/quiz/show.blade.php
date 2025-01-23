@extends('layouts.app')

@section('title', 'Quiz')

@section('content')
<div class="quiz-container">
    <h1>{{ $quiz->title }}</h1>

    <form id="quizForm" class="quiz-form">
        @csrf
        <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">

        @foreach($questions as $question)
        <div class="question-container" data-question="{{ $loop->iteration }}">
            <h2>Question {{ $loop->iteration }}: {{ $question->title }}</h2>
            <div class="options">
                @foreach($question->options as $option)
                <div class="option">
                    <input type="radio"
                        name="answers[{{ $question->id }}]"
                        value="{{ $option }}"
                        id="q{{ $question->id }}_option_{{ $loop->index }}">
                    <label for="q{{ $question->id }}_option_{{ $loop->index }}">
                        {{ $option }}
                    </label>
                </div>
                @endforeach
            </div>
            <div id="feedback_{{ $question->id }}" class="feedback hidden"></div>
        </div>
        @endforeach

        <div class="quiz-controls">
            <button type="submit" class="btn btn-primary">Soumettre les réponses</button>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/quiz.js') }}"></script>
@endsection