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
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#phpBasics">
                                    Les bases de PHP
                                </button>
                            </h2>
                            <div id="phpBasics" class="accordion-collapse collapse show" data-bs-parent="#chaptersAccordion">
                                <div class="accordion-body">
                                    <div class="list-group">
                                        <a href="{{ route('chapter1') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            1. Introduction à PHP
                                            <span class="badge bg-primary rounded-pill">45 min</span>
                                        </a>
                                        <a href="{{ route('chapter2') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            2. Les bases
                                            <span class="badge bg-primary rounded-pill">60 min</span>
                                        </a>
                                        <a href="{{ route('chapter3') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            3. Structures de contrôle
                                            <span class="badge bg-primary rounded-pill">50 min</span>
                                        </a>
                                        <a href="{{ route('chapter4') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            4. Fonctions
                                            <span class="badge bg-primary rounded-pill">55 min</span>
                                        </a>
                                        <a href="{{ route('chapter5') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            5. Tableaux
                                            <span class="badge bg-primary rounded-pill">40 min</span>
                                        </a>
                                        <a href="{{ route('chapter6') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            6. Sessions et Cookies
                                            <span class="badge bg-primary rounded-pill">45 min</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Laravel Framework -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#laravelFramework">
                                    Framework Laravel
                                </button>
                            </h2>
                            <div id="laravelFramework" class="accordion-collapse collapse" data-bs-parent="#chaptersAccordion">
                                <div class="accordion-body">
                                    <div class="list-group">
                                        <a href="{{ route('chapter7') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            7. Introduction à Laravel
                                            <span class="badge bg-primary rounded-pill">40 min</span>
                                        </a>
                                        <a href="{{ route('chapter8') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            8. Installation et configuration
                                            <span class="badge bg-primary rounded-pill">30 min</span>
                                        </a>
                                        <a href="{{ route('chapter9') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            9. Structure du framework
                                            <span class="badge bg-primary rounded-pill">50 min</span>
                                        </a>
                                        <a href="{{ route('chapter10') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            10. Routes et Contrôleurs
                                            <span class="badge bg-primary rounded-pill">60 min</span>
                                        </a>
                                        <a href="{{ route('chapter11') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            11. Modèles et Base de données
                                            <span class="badge bg-primary rounded-pill">70 min</span>
                                        </a>
                                        <a href="{{ route('chapter12') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            12. Vues et Frontend
                                            <span class="badge bg-primary rounded-pill">55 min</span>
                                        </a>
                                        <a href="{{ route('chapter13') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            13. Sécurité et Validation
                                            <span class="badge bg-primary rounded-pill">65 min</span>
                                        </a>
                                        <a href="{{ route('chapter14') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            14. Déploiement et bonnes pratiques
                                            <span class="badge bg-primary rounded-pill">45 min</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Progress Card -->
            @auth
            <div class="card shadow mt-4">
                <div class="card-body">
                    <h5 class="card-title">Votre progression</h5>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: {{ $userProgress ?? 0 }}%">
                            {{ $userProgress ?? 0 }}%
                        </div>
                    </div>
                    <p class="text-muted mt-2">
                        Chapitres complétés : {{ $completedChapters ?? 0 }}/14
                    </p>
                </div>
            </div>
            @endauth
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .list-group-item:hover {
        background-color: #f8f9fa;
    }

    .accordion-button:not(.collapsed) {
        background-color: #e7f1ff;
        color: #0d6efd;
    }
</style>
@endsection