<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChaptersUsersTable extends Migration
{
    public function up(): void
    {
        Schema::create('chapters_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('chapter_number')->constrained('chapters')->onDelete('cascade');
            $table->boolean('completed')->default(false);
            $table->timestamps();
            $table->index(['user_id', 'chapter_number']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chapters_users');
    }
}
