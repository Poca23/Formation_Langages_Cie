@extends('layouts.app')

@section('title', $chapter->title)

@section('content')
<div class="container">
    <h1>{{ $chapter->title }}</h1>
    <p>{{ $chapter->description }}</p>

    <div class="progress">
        <div class="progress-bar" style="width: {{ $chapterProgress }}%">
            Progression : {{ number_format($chapterProgress, 2) }}%
        </div>
    </div>

    @if ($isCompleted)
        <p class="text-success">Vous avez complété ce chapitre ✔</p>
    @else
        <form method="POST" action="{{ route('chapter.complete', ['id' => $currentChapterId]) }}">
            @csrf
            <button type="submit" class="btn btn-success">
                Marquer ce chapitre comme terminé
            </button>
        </form>
    @endif
</div>
@endsection