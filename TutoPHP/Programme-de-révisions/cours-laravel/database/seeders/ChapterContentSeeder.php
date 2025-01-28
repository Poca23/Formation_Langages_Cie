<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChapterContentSeeder extends Seeder
{
    public function run()
    {
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
    }
}
