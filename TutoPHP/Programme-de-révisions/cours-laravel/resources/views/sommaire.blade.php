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
                                        <a href="{{ route('chapter', ['id' => 1]) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            1. Introduction à PHP
                                            <span class="badge bg-primary rounded-pill">45 min</span>
                                        </a>
                                        <a href="{{ route('chapter', ['id' => 2]) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            2. Les bases
                                            <span class="badge bg-primary rounded-pill">60 min</span>
                                        </a>
                                        <a href="{{ route('chapter', ['id' => 3]) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            3. Structures de contrôle
                                            <span class="badge bg-primary rounded-pill">50 min</span>
                                        </a>
                                        <a href="{{ route('chapter', ['id' => 4]) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            4. Fonctions
                                            <span class="badge bg-primary rounded-pill">55 min</span>
                                        </a>
                                        <a href="{{ route('chapter', ['id' => 5]) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            5. Tableaux
                                            <span class="badge bg-primary rounded-pill">40 min</span>
                                        </a>
                                        <a href="{{ route('chapter', ['id' => 6]) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
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
                                        @foreach(range(7, 14) as $chapterId)
                                        <a href="{{ route('chapter', ['id' => $chapterId]) }}">
                                            @endforeach
                                            <!-- Vue allongée !-->
                                    </div>
                                </div>
                            </div>
                        </div ! Linear`