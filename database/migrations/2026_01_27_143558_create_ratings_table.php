<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id('rating_id');
            $table->unsignedTinyInteger('rating_value')->checkBetween(1, 5);

            $table->foreignId('user_id')
                  ->constrained('utilisateur', 'user_id')
                  ->cascadeOnDelete();

            $table->foreignId('recipe_id')
                  ->constrained('recipes', 'recipe_id')
                  ->cascadeOnDelete();

            $table->unique(['user_id', 'recipe_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};

