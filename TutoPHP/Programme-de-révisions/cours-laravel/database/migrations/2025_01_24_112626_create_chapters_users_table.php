<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChaptersUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chapters_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relier à la table users
            $table->foreignId('chapter_id')->constrained()->onDelete('cascade'); // Relier à la table chapters
            $table->boolean('completed')->default(false); // Enregistrer si le chapitre est terminé
            $table->timestamps(); // Ajoute les colonnes created_at et updated_at automatiquement
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapters_users');
    }
}
