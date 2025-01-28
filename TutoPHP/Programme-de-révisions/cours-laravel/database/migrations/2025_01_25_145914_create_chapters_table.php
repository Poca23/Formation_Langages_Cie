<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChaptersTable extends Migration
{
    public function up(): void
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->id(); // Identifiant unique pour le chapitre
            $table->string('title'); // Titre du chapitre
            $table->text('description')->nullable(); // Description du chapitre (optionnel)
            $table->timestamps(); // Colonnes created_at et updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chapters');
    }
}
