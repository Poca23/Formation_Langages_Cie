@extends('layouts.app')

@section('title', 'Développement d\'une application avec Laravel')

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
                        <a class="nav-link" href="#section1">Création d'une petite application CRUD</a>
                        <a class="nav-link" href="#section2">Utilisation des contrôleurs et des ressources Laravel</a>
                        <a class="nav-link" href="#section3">Exercice</a>
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
                    <h1 class="mb-4">Chapitre 12 : Développement d'une application avec Laravel</h1>

                    <section id="section1" class="mb-5">
                        <h2>Création d'une petite application CRUD (Créer, Lire, Mettre à jour, Supprimer)</h2>
                        <p>Dans ce chapitre, nous allons créer une petite application CRUD avec Laravel. Nous allons permettre à l'utilisateur de créer, lire, mettre à jour et supprimer des produits dans la base de données.</p>

                        <h3>Étape 1 - Création des routes</h3>
                        <p>Nous allons commencer par définir les routes nécessaires dans le fichier <strong>routes/web.php</strong> pour afficher les produits, créer de nouveaux produits, mettre à jour et supprimer des produits :</p>
                        <div class="code-block">
                            <pre><code>use App\Models\Product;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{product}/edit', [ProductController::class, 'edit']);
Route::put('/products/{product}', [ProductController::class, 'update']);
Route::delete('/products/{product}', [ProductController::class, 'destroy']);</code></pre>
                        </div>

                        <h3>Étape 2 - Création du contrôleur</h3>
                        <p>Ensuite, nous allons créer un contrôleur <strong>ProductController</strong> pour gérer la logique métier des actions CRUD. Utilisez la commande Artisan suivante :</p>
                        <div class="code-block">
                            <pre><code>php artisan make:controller ProductController</code></pre>
                        </div>

                        <p>Une fois le contrôleur créé, ouvrez-le dans le fichier <strong>app/Http/Controllers/ProductController.php</strong> et définissez les méthodes nécessaires.</p>
                        <!-- Détails des méthodes -->

                        <h3>Étape 3 - Création des vues Blade</h3>
                        <p>Nous allons maintenant créer des vues pour afficher la liste des produits, le formulaire de création, le formulaire d'édition et la confirmation de suppression.</p>

                        <!-- Détails des vues -->

                    </section>

                    <section id="section2" class="mb-5">
                        <h2>Utilisation des contrôleurs et des ressources Laravel</h2>
                        <p>Laravel offre des outils pour simplifier la gestion des contrôleurs et des ressources...</p>
                        <!-- Détails supplémentaires -->
                    </section>

                    <section id="section3" class="mb-5">
                        <h2>Exercice :</h2>
                        <ul class="list-group">
                            <li class="list-group-item">Créez une application Laravel permettant de gérer des produits avec un système CRUD complet.</li>
                            <li class="list-group-item">Ajoutez des validations pour chaque champ de formulaire (par exemple, le prix doit être numérique).</li>
                            <li class="list-group-item">Affichez les produits dans une vue, permettant de les éditer et de les supprimer.</li>
                            <li class="list-group-item">Ajoutez des liens pour naviguer entre les pages d'édition, de création et de suppression.</li>
                        </ul>
                    </section>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('chapter11') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Chapitre précédent
                        </a>
                        <a href="{{ route('chapter13') }}" class="btn btn-primary">
                            Chapitre suivant <i class="fas fa-arrow-right"></i>
                        </a>
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
    document.addEventListener('DOMContentLoaded', function() {
        // Script pour gérer des fonctionnalités spécifiques au chapitre
    });
</script>
@endsection