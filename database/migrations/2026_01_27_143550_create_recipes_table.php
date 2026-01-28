<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id('recipe_id');
            $table->string('recipe_title', 200);
            $table->text('recipe_description');
            $table->string('recipe_category', 100);
            $table->string('recipe_image', 255)->nullable();

            $table->foreignId('user_id')
                  ->constrained('utilisateur', 'user_id')
                  ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};

