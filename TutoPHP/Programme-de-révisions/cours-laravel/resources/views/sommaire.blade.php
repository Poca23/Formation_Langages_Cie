@extends('layouts.app')

@section('title', 'Sommaire')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">Sommaire de la formation</h2>
                </div>
                <div class="card-body">
                    <div class="accordion" id="chaptersAccordion">
                        <!-- PHP Basics -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#phpBasics">
                                    Les bases de PHP
                                </button>
                            </h2>
                            <div id="phpBasics" class="accordion-collapse collapse show"
                                data-bs-parent="#chaptersAccordion">
                                <div class="accordion-body">
                                    <div class="list-group">
                                        @foreach($chapters as $chapter)
                                            @if($chapter['id'] <= 6)
                                                <a href="{{ route('chapter.show', ['id' => $chapter['id']]) }}"
                                                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                                    {{ $chapter['id'] }}. {{ $chapter['title'] }}
                                                    <div>
                                                        @if(isset($quizResults[$chapter['id']]))
                                                            <span class="badge bg-success me-2">
                                                                Score: {{ $quizResults[$chapter['id']]->score }}%
                                                            </span>
                                                        @endif
                                                        <span class="badge bg-primary rounded-pill">
                                                            {{ $chapter['duration'] }}
                                                        </span>
                                                    </div>
                                                </a>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Laravel Framework -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#laravelFramework">
                                    Framework Laravel
                                </button>
                            </h2>
                            <div id="laravelFramework" class="accordion-collapse collapse"
                                data-bs-parent="#chaptersAccordion">
                                <div class="accordion-body">
                                    <div class="list-group">
                                        @foreach($chapters as $chapter)
                                            @if($chapter['id'] > 6)
                                                <a href="{{ route('chapter.show', ['id' => $chapter['id']]) }}"
                                                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                                    {{ $chapter['id'] }}. {{ $chapter['title'] }}
                                                    <div>
                                                        @if(isset($quizResults[$chapter['id']]))
                                                            <span class="badge bg-success me-2">
                                                                Score: {{ $quizResults[$chapter['id']]->score }}%
                                                            </span>
                                                        @endif
                                                        <span class="badge bg-primary rounded-pill">
                                                            {{ $chapter['duration'] }}
                                                        </span>
                                                    </div>
                                                </a>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .accordion-button:not(.collapsed) {
        background-color: #f8f9fa;
        color: #0d6efd;
    }

    .list-group-item:hover {
        background-color: #f8f9fa;
    }

    .badge {
        font-size: 0.8em;
    }
</style>
@endsection