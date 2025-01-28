<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChapterSeeder extends Seeder
{
    public function run()
    {
        DB::table('chapters')->insert([
            [
                'id' => 1,
                'title' => 'Introduction à PHP',
                'description' => '
                    <section id="section1" class="mb-5">
                        <h2>Qu\'est-ce que PHP ?</h2>
                        <p>PHP (Hypertext Preprocessor) est un langage de programmation côté serveur utilisé pour le développement web.</p>
                    </section>

                    <section id="section2" class="mb-5">
                        <h2>Histoire de PHP</h2>
                        <p>PHP a été créé en 1994 par Rasmus Lerdorf. Initialement utilisé pour le suivi des visiteurs, il est devenu aujourd\'hui l\'un des langages backend les plus populaires.</p>
                    </section>

                    <section id="section3" class="mb-5">
                        <h2>Pourquoi utiliser PHP ?</h2>
                        <ul>
                            <li>Facile à apprendre et à utiliser.</li>
                            <li>Compatible avec la plupart des serveurs (Apache, Nginx, etc.).</li>
                            <li>Supporte une grande variété de bases de données comme MySQL et PostgreSQL.</li>
                        </ul>
                    </section>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'title' => 'Les bases de PHP',
                'description' => '
                    <section id="section1" class="mb-5">
                        <h2>Syntaxe de base</h2>
                        <p>La syntaxe de base de PHP inclut les balises d\'ouverture et de fermeture, ainsi que les instructions de base.</p>
                        <div class="code-block">
                            <pre><code>&lt;?php
            echo "Hello World!";
            ?&gt;</code></pre>
                        </div>
                    </section>
            
                    <section id="section2" class="mb-5">
                        <h2>Variables et Types de données</h2>
                        <p>En PHP, les variables sont déclarées avec le symbole $.</p>
                        <div class="code-block">
                            <pre><code>$string = "Hello";           // String
            $integer = 42;            // Integer
            $float = 3.14;           // Float
            $boolean = true;         // Boolean
            $array = [1, 2, 3];      // Array</code></pre>
                        </div>
                        <ul>
                            <li>String (chaîne de caractères)</li>
                            <li>Integer (nombre entier)</li>
                            <li>Float (nombre décimal)</li>
                            <li>Boolean (true/false)</li>
                            <li>Array (tableau)</li>
                        </ul>
                    </section>
            
                    <section id="section3" class="mb-5">
                        <h2>Opérateurs</h2>
                        <p>Les opérateurs permettent d\'effectuer des opérations sur les variables.</p>
                        <h3>Opérateurs arithmétiques</h3>
                        <div class="code-block">
                            <pre><code>$a + $b    // Addition
            $a - $b    // Soustraction
            $a * $b    // Multiplication
            $a / $b    // Division
            $a % $b    // Modulo</code></pre>
                        </div>
                        <h3>Opérateurs de comparaison</h3>
                        <div class="code-block">
                            <pre><code>$a == $b   // Égal à
            $a === $b  // Identique à
            $a != $b   // Différent de
            $a > $b    // Supérieur à
            $a < $b    // Inférieur à
            $a >= $b   // Supérieur ou égal à
            $a <= $b   // Inférieur ou égal à</code></pre>
                        </div>
                        <h3>Opérateurs logiques</h3>
                        <div class="code-block">
                            <pre><code>$a && $b   // ET logique
            $a || $b   // OU logique
            !$a        // NON logique</code></pre>
                        </div>
                    </section>
            
                    <section id="section4" class="mb-5">
                        <h2>Constantes</h2>
                        <p>Les constantes sont des valeurs qui ne changent pas pendant l\'exécution du script.</p>
                        <div class="code-block">
                            <pre><code>define("MA_CONSTANTE", "Valeur fixe");
            const AUTRE_CONSTANTE = "Une autre valeur";
            
            // Utilisation
            echo MA_CONSTANTE;
            echo AUTRE_CONSTANTE;</code></pre>
                        </div>
                    </section>
            
                    <section id="section5" class="mb-5">
                        <h2>Commentaires</h2>
                        <p>Les commentaires permettent de documenter votre code.</p>
                        <div class="code-block">
                            <pre><code>// Ceci est un commentaire sur une ligne
            
            /* Ceci est un commentaire
               sur plusieurs lignes */
            
            # Ceci est aussi un commentaire sur une ligne</code></pre>
                        </div>
                    </section>',
                'created_at' => now(),
                'updated_at' => now()
            ],


            [
                'id' => 3,
                'title' => 'Structures de contrôle',
                'description' => '
                    <section id="section1" class="mb-5">
                        <h2>Les conditions</h2>
                        <p>Les structures conditionnelles permettent d\'exécuter différents blocs de code selon certaines conditions.</p>
                        <div class="code-block">
                            <pre><code>if (condition) {
    // code
} else {
    // autre code
}</code></pre>
                        </div>
                    </section>

                    <section id="section2" class="mb-5">
                        <h2>Les boucles</h2>
                        <p>Les boucles permettent de répéter des actions.</p>
                        <ul>
                            <li>for</li>
                            <li>while</li>
                            <li>do while</li>
                            <li>foreach</li>
                        </ul>
                    </section>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'title' => 'Fonctions en PHP',
                'description' => '
                    <section id="section1" class="mb-5">
                        <h2>Définition des fonctions</h2>
                        <p>Les fonctions sont des blocs de code réutilisables.</p>
                        <div class="code-block">
                            <pre><code>function maFonction($param) {
    return $param * 2;
}</code></pre>
                        </div>
                    </section>

                    <section id="section2" class="mb-5">
                        <h2>Fonctions natives</h2>
                        <p>PHP dispose de nombreuses fonctions intégrées pour traiter :</p>
                        <ul>
                            <li>Les chaînes de caractères</li>
                            <li>Les tableaux</li>
                            <li>Les fichiers</li>
                            <li>Les dates</li>
                        </ul>
                    </section>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'title' => 'Programmation Orientée Objet',
                'description' => '
                    <section id="section1" class="mb-5">
                        <h2>Classes et Objets</h2>
                        <p>La POO permet de structurer le code en utilisant des classes et des objets.</p>
                        <div class="code-block">
                            <pre><code>class MaClasse {
    private $propriete;
    
    public function __construct($valeur) {
        $this->propriete = $valeur;
    }
}</code></pre>
                        </div>
                    </section>

                    <section id="section2" class="mb-5">
                        <h2>Héritage</h2>
                        <p>L\'héritage permet de créer des classes qui héritent des propriétés et méthodes d\'autres classes.</p>
                    </section>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'title' => 'Introduction à Laravel',
                'description' => '
                    <section id="section1" class="mb-5">
                        <h2>Qu\'est-ce que Laravel ?</h2>
                        <p>Laravel est un framework PHP moderne et puissant pour le développement web.</p>
                    </section>

                    <section id="section2" class="mb-5">
                        <h2>Installation</h2>
                        <p>Pour installer Laravel, vous avez besoin de :</p>
                        <ul>
                            <li>PHP >= 7.4</li>
                            <li>Composer</li>
                            <li>Node.js et NPM (optionnel)</li>
                        </ul>
                    </section>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'title' => 'Routes et Controllers',
                'description' => '
                    <section id="section1" class="mb-5">
                        <h2>Les Routes dans Laravel</h2>
                        <p>Les routes définissent les points d\'entrée de votre application.</p>
                        <div class="code-block">
                            <pre><code>Route::get(\'/accueil\', function () {
                return view(\'welcome\');
            });</code></pre>
                        </div>
                    </section>
            
                    <section id="section2" class="mb-5">
                        <h2>Les Controllers</h2>
                        <p>Les controllers gèrent la logique de l\'application.</p>
                        <div class="code-block">
                            <pre><code>class UserController extends Controller
            {
                public function index()
                {
                    return User::all();
                }
            }</code></pre>
                        </div>
                    </section>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 8,
                'title' => 'Vues et Blade',
                'description' => '
                    <section id="section1" class="mb-5">
                        <h2>Le moteur de template Blade</h2>
                        <p>Blade est le moteur de template simple mais puissant de Laravel.</p>
                        <div class="code-block">
                            <pre><code>@extends(\'layout\')
            @section(\'content\')
                <h1>{{ $title }}</h1>
            @endsection</code></pre>
                        </div>
                    </section>
            
                    <section id="section2" class="mb-5">
                        <h2>Les directives Blade</h2>
                        <p>Les principales directives Blade :</p>
                        <ul>
                            <li>@if, @else, @endif</li>
                            <li>@foreach, @endforeach</li>
                            <li>@include</li>
                            <li>@yield</li>
                        </ul>
                    </section>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 9,
                'title' => 'Base de données et Eloquent',
                'description' => '
                    <section id="section1" class="mb-5">
                        <h2>Configuration de la base de données</h2>
                        <p>Laravel supporte plusieurs types de bases de données :</p>
                        <ul>
                            <li>MySQL</li>
                            <li>PostgreSQL</li>
                            <li>SQLite</li>
                            <li>SQL Server</li>
                        </ul>
                    </section>
            
                    <section id="section2" class="mb-5">
                        <h2>Les modèles Eloquent</h2>
                        <p>Eloquent est l\'ORM de Laravel pour interagir avec la base de données.</p>
                        <div class="code-block">
                            <pre><code>class User extends Model
            {
                protected $fillable = [\'name\', \'email\'];
            }</code></pre>
                        </div>
                    </section>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 10,
                'title' => 'Migrations et Seeders',
                'description' => '
                    <section id="section1" class="mb-5">
                        <h2>Les Migrations</h2>
                        <p>Les migrations permettent de gérer la structure de la base de données.</p>
                        <div class="code-block">
                            <pre><code>public function up()
            {
                Schema::create(\'users\', function (Blueprint $table) {
                    $table->id();
                    $table->string(\'name\');
                    $table->timestamps();
                });
            }</code></pre>
                        </div>
                    </section>
            
                    <section id="section2" class="mb-5">
                        <h2>Les Seeders</h2>
                        <p>Les seeders permettent de remplir la base de données avec des données de test.</p>
                    </section>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 11,
                'title' => 'Authentification et Autorisation',
                'description' => '
                    <section id="section1" class="mb-5">
                        <h2>Système d\'authentification</h2>
                        <p>Laravel propose un système d\'authentification complet et personnalisable.</p>
                        <div class="code-block">
                            <pre><code>Auth::check() // Vérifie si l\'utilisateur est connecté
            Auth::user() // Récupère l\'utilisateur connecté</code></pre>
                        </div>
                    </section>
            
                    <section id="section2" class="mb-5">
                        <h2>Les Middleware</h2>
                        <p>Les middleware filtrent les requêtes HTTP de votre application.</p>
                    </section>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 12,
                'title' => 'Formulaires et Validation',
                'description' => '
                    <section id="section1" class="mb-5">
                        <h2>Création de formulaires</h2>
                        <p>Laravel facilite la création et le traitement des formulaires.</p>
                        <div class="code-block">
                            <pre><code>@csrf
            <form method="POST" action="/submit">
                <input type="text" name="title">
                <button type="submit">Envoyer</button>
            </form></code></pre>
                        </div>
                    </section>
            
                    <section id="section2" class="mb-5">
                        <h2>Validation des données</h2>
                        <p>Laravel inclut un système de validation puissant.</p>
                        <div class="code-block">
                            <pre><code>$validated = $request->validate([
                \'title\' => \'required|min:3\',
                \'email\' => \'required|email\'
            ]);</code></pre>
                        </div>
                    </section>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 13,
                'title' => 'API REST avec Laravel',
                'description' => '
                    <section id="section1" class="mb-5">
                        <h2>Création d\'API</h2>
                        <p>Laravel est parfait pour créer des API RESTful.</p>
                        <div class="code-block">
                            <pre><code>Route::apiResource(\'users\', UserController::class);</code></pre>
                        </div>
                    </section>
            
                    <section id="section2" class="mb-5">
                        <h2>Ressources API</h2>
                        <p>Les ressources API permettent de transformer vos modèles et collections.</p>
                        <div class="code-block">
                            <pre><code>class UserResource extends JsonResource
            {
                public function toArray($request)
                {
                    return [
                        \'id\' => $this->id,
                        \'name\' => $this->name
                    ];
                }
            }</code></pre>
                        </div>
                    </section>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 14,
                'title' => 'Tests et Déploiement',
                'description' => '
                    <section id="section1" class="mb-5">
                        <h2>Tests avec PHPUnit</h2>
                        <p>Laravel facilite l\'écriture de tests avec PHPUnit.</p>
                        <div class="code-block">
                            <pre><code>public function test_basic_test()
            {
                $response = $this->get(\'/\');
                $response->assertStatus(200);
            }</code></pre>
                        </div>
                    </section>
            
                    <section id="section2" class="mb-5">
                        <h2>Déploiement</h2>
                        <p>Points importants pour le déploiement :</p>
                        <ul>
                            <li>Configuration de l\'environnement</li>
                            <li>Optimisation des performances</li>
                            <li>Sécurité</li>
                            <li>Maintenance</li>
                        </ul>
                    </section>',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
