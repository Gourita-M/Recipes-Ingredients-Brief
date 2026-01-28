<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id('comment_id');
            $table->text('comment_content');
            $table->date('created_at')->default(DB::raw('CURRENT_DATE'));

            $table->foreignId('user_id')
                  ->constrained('utilisateur', 'user_id')
                  ->cascadeOnDelete();

            $table->foreignId('recipe_id')
                  ->constrained('recipes', 'recipe_id')
                  ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};

