<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChapterContentSeeder extends Seeder
{
    public function run()
    {
        DB::table('chapters')->where('id', 1)->update([
            'content' => '
                <section id="section1" class="mb-5">
                    <h2>Qu\'est-ce que PHP ?</h2>
                    <p>PHP (Hypertext Preprocessor) est un langage de programmation côté serveur conçu principalement pour le développement web dynamique.</p>
                </section>

                <section id="section2" class="mb-5">
                    <h2>Histoire de PHP</h2>
                    <p>PHP a été créé en 1994 par Rasmus Lerdorf. Initialement un simple ensemble de scripts perl pour suivre les visites sur son CV en ligne, 
                    PHP a évolué pour devenir un des langages dominants du web. À partir de PHP 3, il a acquis une flexibilité et s\'est engagé dans une adoption massive.</p>
                </section>

                <section id="section3" class="mb-5">
                    <h2>Pourquoi utiliser PHP ?</h2>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Simple :</strong> PHP est facile à apprendre même pour les débutants.
                        </li>
                        <li class="list-group-item">
                            <strong>Flexible :</strong> Il est compatible avec presque tous les systèmes d\'exploitation (Linux, Windows, macOS, etc.).
                        </li>
                        <li class="list-group-item">
                            <strong>Communauté :</strong> Une grande communauté de développeurs qui permettent de résoudre facilement les problèmes.
                        </li>
                        <li class="list-group-item">
                            <strong>Open Source :</strong> PHP est un logiciel gratuit et libre d\'utilisation.
                        </li>
                        <li class="list-group-item">
                            <strong>Intégration :</strong> PHP s\'intègre parfaitement avec HTML, CSS, JavaScript et plusieurs bases de données comme MySQL et PostgreSQL.
                        </li>
                    </ul>
                </section>
            ',
        ]);
        
        DB::table('chapters')->where('id', 2)->update([
            'content' => '
                <section id="section1" class="mb-5">
                    <h2>Syntaxe de base</h2>
                    <p>La syntaxe PHP est délimitée par les balises <code>&lt;?php</code> et <code>?&gt;</code>.</p>
                    <div class="code-block">
                        <pre><code>
&lt;?php
    // Votre code PHP ici
    echo "Bonjour";
?&gt;
                        </code></pre>
                    </div>
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle"></i> La balise de fermeture est optionnelle si le fichier contient uniquement du PHP.
                    </div>
                </section>

                <section id="section2" class="mb-5">
                    <h2>Variables et Types de données</h2>
                    <p>En PHP, les variables commencent par le symbole $.</p>

                    <h4>Types de base :</h4>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>String (chaîne)</strong>
                            <div class="code-block">
                                <code>$nom = "John";</code>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <strong>Integer (entier)</strong>
                            <div class="code-block">
                                <code>$age = 25;</code>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <strong>Float (décimal)</strong>
                            <div class="code-block">
                                <code>$prix = 19.99;</code>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <strong>Boolean</strong>
                            <div class="code-block">
                                <code>$estActif = true;</code>
                            </div>
                        </li>
                    </ul>
                </section>

                <section id="section3" class="mb-5">
                    <h2>Opérateurs</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Opérateur</th>
                                    <th>Description</th>
                                    <th>Exemple</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>+</td>
                                    <td>Addition</td>
                                    <td><code>$a + $b</code></td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>Soustraction</td>
                                    <td><code>$a - $b</code></td>
                                </tr>
                                <tr>
                                    <td>*</td>
                                    <td>Multiplication</td>
                                    <td><code>$a * $b</code></td>
                                </tr>
                                <tr>
                                    <td>/</td>
                                    <td>Division</td>
                                    <td><code>$a / $b</code></td>
                                </tr>
                                <tr>
                                    <td>%</td>
                                    <td>Modulo</td>
                                    <td><code>$a % $b</code></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                <section id="section4" class="mb-5">
                    <h2>Constantes</h2>
                    <p>Les constantes sont définies avec la fonction <code>define()</code> ou le mot-clé <code>const</code>.</p>
                    <div class="code-block">
                        <pre><code>
// Utilisation de define()
define("PI", 3.14159);

// Utilisation de const
const MAX_USERS = 100;

// Utilisation
echo PI; // Affiche 3.14159
echo MAX_USERS; // Affiche 100
                        </code></pre>
                    </div>
                </section>

                <section id="section5" class="mb-5">
                    <h2>Commentaires</h2>
                    <p>Les commentaires sont utiles pour documenter votre code.</p>
                    <div class="code-block">
                        <pre><code>
// Commentaire sur une ligne

/* 
   Commentaire
   sur plusieurs
   lignes 
*/

# Commentaire style shell
                        </code></pre>
                    </div>
                </section>'
        ]);


        DB::table('chapters')->where('id', 3)->update([
            'content' => '
                <section id="section1" class="mb-5">
                    <h2>Les conditions en PHP</h2>
                    <p>Les structures conditionnelles permettent de...</p>
                </section>
            '
        ]);

        DB::table('chapters')->where('id', 4)->update([
            'content' => '
                <section id="section1" class="mb-5">
                    <h2>Fonctions en PHP</h2>
                    <p>Les fonctions sont des blocs de code réutilisables.</p>
                </section>
            '
        ]);


    }
}
