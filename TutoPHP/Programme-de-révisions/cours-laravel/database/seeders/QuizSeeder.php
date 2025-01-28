<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
    {
        // Créer un quiz pour le chapitre 2
        $quizId = DB::table('quizzes')->insertGetId([
            'title' => 'Quiz du Chapitre 2',
            'chapter_number' => 2,
            'description' => 'Testez vos connaissances sur les bases du PHP',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Ajouter des questions
        DB::table('questions')->insert([
            [
                'quiz_id' => $quizId,
                'question_text' => 'Quelle est la syntaxe correcte pour déclarer une variable en PHP?',
                'option_a' => '$nom = "John"',
                'option_b' => 'var nom = "John"',
                'option_c' => 'nom = "John"',
                'option_d' => 'let nom = "John"',
                'correct_answer' => 'a',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => $quizId,
                'question_text' => 'Comment débute un bloc PHP?',
                'option_a' => '<php>',
                'option_b' => '<?php',
                'option_c' => '<?',
                'option_d' => '<script php>',
                'correct_answer' => 'b',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Ajoutez d'autres questions selon vos besoins
        ]);
    }
}
