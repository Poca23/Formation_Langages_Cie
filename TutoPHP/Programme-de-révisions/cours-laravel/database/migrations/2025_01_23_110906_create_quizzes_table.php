<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Création de la table "quizzes"
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('chapter_number');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Création de la table "questions" avec une relation clé étrangère vers "quizzes"
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quiz_id')->constrained()->onDelete('cascade'); // Supprime les questions si le quiz est supprimé
            $table->text('question_text');
            $table->string('option_a');
            $table->string('option_b');
            $table->string('option_c');
            $table->string('option_d');
            $table->string('correct_answer');
            $table->text('explanation')->nullable();
            $table->timestamps();
        });

        // Création de la table "user_quiz_results" pour stocker les résultats des utilisateurs
        Schema::create('user_quiz_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Supprime les résultats si l'utilisateur est supprimé
            $table->foreignId('quiz_id')->constrained()->onDelete('cascade'); // Supprime les résultats si le quiz est supprimé
            $table->integer('score');
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Supprimer les tables dans l'ordre inverse pour gérer les dépendances
        Schema::dropIfExists('user_quiz_results'); // Supprime d'abord les résultats qui dépendent de "users" et "quizzes"
        Schema::dropIfExists('questions');        // Supprime ensuite les questions dépendantes de "quizzes"
        Schema::dropIfExists('quizzes');         // Enfin, supprime la table "quizzes"
    }
};
