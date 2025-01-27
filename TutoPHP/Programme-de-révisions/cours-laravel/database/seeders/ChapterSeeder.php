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
            // Vous pouvez ajouter d'autres chapitres ici
        ]);
    }
}
