@extends('layouts.app')

@section('title', 'Tableau de bord')

@section('content')
<div class="container">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i class="fas fa-user-circle fa-3x"></i>
                        <h5 class="mt-2">{{ Auth::user()->name }}</h5>
                        <p class="text-muted">{{ Auth::user()->email }}</p>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ $progress ?? 0 }}%">
                            {{ number_format($progress, 2) }}% complété
                        </div>
                        <p class="text-center">Progression globale</p>
                    </div>
                    <p class="text-center">Progression globale</p>
                </div>
            </div>

            <div class="list-group">
                <a href="#progression" class="list-group-item list-group-item-action active">
                    <i class="fas fa-chart-line me-2"></i> Progression
                </a>
                <a href="#quiz" class="list-group-item list-group-item-action">
                    <i class="fas fa-question-circle me-2"></i> Quiz
                </a>
                <a href="#achievements" class="list-group-item list-group-item-action">
                    <i class="fas fa-trophy me-2"></i> Réussites
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <!-- Welcome Card -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h4 class="card-title">Bienvenue sur votre tableau de bord</h4>
                    <p class="card-text">Suivez votre progression et accédez à vos ressources d'apprentissage.</p>
                </div>
            </div>

            <!-- Progress Section -->
            <div id="progression" class="card shadow mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Progression par chapitre</h5>
                </div>
                <div class="card-body">
                    @foreach($chapters ?? [] as $chapter)
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span>{{ is_object($chapter) && property_exists($chapter, 'title') ? $chapter->title : 'N/A' }}</span>
                                <span>{{ is_object($chapter) && property_exists($chapter, 'progress') ? $chapter->progress : 'N/A' }}%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ $chapter->progress }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Recent Quiz Results -->
            <div id="quiz" class="card shadow mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Résultats récents des quiz</h5>
                </div>
                <div class="card-body">
                    @if(isset($quizResults) && count($quizResults) > 0)
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Quiz</th>
                                        <th>Score</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($quizResults as $result)
                                        <tr>
                                            <td>{{ $result->quiz_name }}</td>
                                            <td>{{ $result->score }}%</td>
                                            <td>{{ $result->created_at->format('d/m/Y') }}</td>
                                            <td>
                                                <a href="{{ route('quiz.show', $result->quiz_id) }}"
                                                    class="btn btn-sm btn-primary">
                                                    Revoir
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-center">Aucun quiz complété pour le moment.</p>
                    @endif
                </div>
            </div>

            <!-- Achievements -->
            <div id="achievements" class="card shadow">
                <div class="card-header">
                    <h5 class="mb-0">Réussites</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($achievements ?? [] as $achievement)
                            <div class="col-md-4 mb-3">
                                <div
                                    class="achievement-card text-center {{ is_object($achievement) && property_exists($achievement, 'unlocked') && $achievement->unlocked ? 'unlocked' : 'locked' }}">
                                    <i class="fas {{ is_object($achievement) && property_exists($achievement, 'icon') ? $achievement->icon : '' }} fa-2x mb-2"></i>
                                    <h6>{{ is_object($achievement) && property_exists($achievement, 'title') ? $achievement->title : 'N/A' }}</h6>
                                    <small class="text-muted">{{ is_object($achievement) && property_exists($achievement, 'description') ? $achievement->description : 'N/A' }}</small>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .achievement-card {
        padding: 1rem;
        border-radius: 8px;
        border: 1px solid #ddd;
    }

    .achievement-card.unlocked {
        background-color: #e8f5e9;
        border-color: #4caf50;
    }

    .achievement-card.locked {
        background-color: #f5f5f5;
        opacity: 0.7;
    }

    .progress {
        height: 10px;
    }

    .list-group-item i {
        width: 20px;
    }
</style>
@endsection