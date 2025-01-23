@extends('layouts.app')

@section('title', 'Modèles et Base de Données')

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
                        <a class="nav-link" href="#section1">Introduction aux modèles et à la base de données</a>
                        <a class="nav-link" href="#section2">Définition des modèles</a>
                        <a class="nav-link" href="#section3">Utilisation de Eloquent</a>
                        <a class="nav-link" href="#section4">Création de tables</a>
                        <a class="nav-link" href="#section5">Insertion de données</a>
                        <a class="nav-link" href="#section6">Récupération de données</a>
                        <a class="nav-link" href="#section7">Mise à jour de données</a>
                        <a class="nav-link" href="#section8">Suppression de données</a>
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
                    <h1 class="mb-4">Chapitre 11 : Modèles et Base de Données</h1>

                    <section id="section1" class="mb-5">
                        <h2>Introduction aux modèles et à la base de données</h2>
                        <p>Les modèles représentent les tables de la base de données.</p>
                        <p>Les modèles sont utilisés pour interagir avec la base de données.</p>
                    </section>

                    <section id="section2" class="mb-5">
                        <h2>Définition des modèles</h2>
                        <p>Les modèles sont définis dans le dossier app/Models de votre application.</p>
                        <p>Les modèles doivent étendre la classe Model.</p>
                        <code>
                            namespace App\Models;

                            use Illuminate\Database\Eloquent\Model;

                            class User extends Model
                            {
                            protected $fillable = ['name', 'email', 'password'];
                            }
                        </code>
                    </section>

                    <section id="section3" class="mb-5">
                        <h2>Utilisation de Eloquent</h2>
                        <p>Eloquent est l'ORM (Object-Relational Mapping) de Laravel.</p>
                        <p>Eloquent fournit une interface simple pour interagir avec la base de données.</p>
                        <code>
                            $user = User::find(1);
                        </code>
                    </section>

                    <section id="section4" class="mb-5">
                        <h2>Création de tables</h2>
                        <p>Les tables sont créées en utilisant les migrations.</p>
                        <p>Les migrations sont des classes qui définissent les modifications apportées à la base de données.</p>
                        <code>
                            use Illuminate\Database\Migrations\Migration;
                            use Illuminate\Database\Schema\Blueprint;

                            class CreateUsersTable extends Migration
                            {
                            public function up()
                            {
                            Schema::create('users', function (Blueprint $table) {
                            $table->id();
                            $table->string('name');
                            $table->string('email')->unique();
                            $table->string('password');
                            $table->timestamps();
                            });
                            }

                            public function down()
                            {
                            Schema::dropIfExists('users');
                            }
                            }
                        </code>
                    </section>

                    <section id="section5" class="mb-5">
                        <h2>Insertion de données</h2>
                        <p>Les données sont insérées en utilisant la méthode create() du modèle.</p>
                        <code>
                            $user = User::create(['name' => 'John Doe', 'email' => 'john@example.com', 'password' => 'secret']);
                        </code>
                    </section>

                    <section id="section6" class="mb-5">
                        <h2>Récupération de données</h2>
                        <p>Les données sont récupérées en utilisant les méthodes find(), get() ou all() du modèle.</p>
                        <code>
                            $user = User::find(1);
                            $users = User::get();
                        </code>
                    </section>

                    <section id="section7" class="mb-5">
                        <h2>Mise à jour de données</h2>
                        <p>Les données sont mises à jour en utilisant la méthode update() du modèle.</p>
                        <code>
                            $user = User::find(1);
                            $user->update(['name' => 'Jane Doe']);
                        </code>
                    </section>

                    <section id="section8" class="mb-5">
                        <h2>Suppression de données</h2>
                        <p>Les données sont supprimées en utilisant la méthode delete() du modèle.</p>
                        <code>
                            $user = User::find(1);
                            $user->delete();
                        </code>
                    </section>

                    <!-- Exercices pratiques -->
                    <div class="card mt-4">
                        <div class="card-header bg-light">
                            <h3 class="mb-0">Exercices pratiques</h3>
                        </div>
                        <div class="card-body">
                            <div class="exercise mb-4">
                                <h4>Exercice 1</h4>
                                <p>Créez un nouveau modèle pour représenter les utilisateurs.</p>
                                <div class="code-editor" id="exercise1">
                                    <textarea class="form-control" rows="8">
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'email', 'password'];
}
                                    </textarea>
                                    <button class="btn btn-primary mt-2" onclick="verifyExercise1()">Vérifier</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quiz -->
                    <div class="card mt-4">
                        <div class="card-header bg-light">
                            <h3 class="mb-0">Quiz rapide</h3>
                        </div>
                        <div class="card-body">
                            <form id="chapter-quiz">
                                <div class="mb-3">
                                    <p>Quel est le dossier où les modèles doivent être définis ?</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="1">
                                        <label class="form-check-label">app/Models</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="2">
                                        <label class="form-check-label">app/Controllers</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1" value="3">
                                        <label class="form-check-label">app/Views</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Vérifier</button>
                            </form>
                        </div>
                    </div>

                    <!-- Navigation entre chapitres -->
                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('chapter10') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Chapitre précédent
                        </a>
                        <a href="{{ route('chapter12') }}" class="btn btn-primary">
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

    .code-editor textarea {
        font-family: monospace;
        resize: vertical;
    }
</style>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gestion du quiz
        document.getElementById('chapter-quiz').addEventListener('submit', function(e) {
            e.preventDefault();
            // Logique de vérification du quiz
        });

        // Navigation fluide
        document.querySelectorAll('#navbar-chapter .nav-link').forEach(function(navLink) {
            navLink.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });

    function verifyExercise1() {
        // Logique de vérification de l'exercice
    }
</script>
@endsection