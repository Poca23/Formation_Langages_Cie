@extends('layouts.app')

@section('title', 'Sécurisation des applications avec Laravel')

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
                        <a class="nav-link" href="#section1">Introduction</a>
                        <a class="nav-link" href="#section2">Validation des formulaires</a>
                        <a class="nav-link" href="#section3">Protection contre les attaques CSRF</a>
                        <a class="nav-link" href="#section4">Gestion des erreurs</a>
                    </nav>
                </div>
            </div>

            <div class="progress mb-3">
                <div class="progress-bar" role="progressbar" style="width: {{ $progress ?? 0 }}%">
                    {{ $progress ?? 0 }}% complété
                </div>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class="col-md-9">
            <div class="card shadow">
                <div class="card-body">
                    <h1 class="mb-4">Chapitre 13 : Sécurisation des applications avec Laravel</h1>

                    <section id="section1" class="mb-5">
                        <h2>Introduction</h2>
                        <p>La sécurisation d'une application est cruciale. Dans ce chapitre, nous aborderons les
                            meilleures pratiques pour protéger votre application Laravel.</p>
                    </section>

                    <section id="section2" class="mb-5">
                        <h2>Validation des formulaires</h2>
                        <p>Laravel fournit un système de validation intégré qui facilite la validation des données
                            envoyées via les formulaires.</p>
                        <pre><code>
$request->validate([
    'name' => 'required|max:255',
    'email' => 'required|email',
]);
                        </code></pre>
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle"></i> Assurez-vous d'afficher les messages d'erreur aux
                            utilisateurs.
                        </div>
                    </section>

                    <section id="section3" class="mb-5">
                        <h2>Protection contre les attaques CSRF</h2>
                        <p>Laravel inclut la protection CSRF par défaut. Ajoutez le champ CSRF à vos formulaires en
                            utilisant {{ csrf_field() }} ou @csrf dans vos vues Blade.</p>
                        <pre><code>
<form method="POST" action="/profile">
    @csrf
    <input type="text" name="name">
    <button type="submit">Mettre à jour</button>
</form>
                        </code></pre>
                    </section>

                    <section id="section4" class="mb-5">
                        <h2>Gestion des erreurs</h2>
                        <p>Lorsqu'une validation échoue, Laravel redirige automatiquement l'utilisateur à la page
                            précédente avec les anciennes données et les erreurs.</p>
                        <pre><code>
if ($validator->fails()) {
    return redirect('form')
                ->withErrors($validator)
                ->withInput();
}
                        </code></pre>
                    </section>

                    <div class="d-flex justify-content-between mt-4">
                        <!-- Lien vers le chapitre précédent -->
                        @if ($currentChapterId > 1)
                            <a href="{{ route('chapter', ['id' => $currentChapterId - 1]) }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Chapitre précédent
                            </a>
                        @endif

                        <!-- Lien vers le chapitre suivant -->
                        @if ($currentChapterId < $totalChapters)
                            <a href="{{ route('chapter', ['id' => $currentChapterId + 1]) }}" class="btn btn-primary">
                                Chapitre suivant <i class="fas fa-arrow-right"></i>
                            </a>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .code-block {
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 5px;
        margin: 10px 0;
    }
</style>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Script pour gérer des fonctionnalités spécifiques au chapitre, si nécessaire
    });
</script>
@endsection