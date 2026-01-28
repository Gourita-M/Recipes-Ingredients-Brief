<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('username', 100);
            $table->string('user_email', 150)->unique();
            $table->string('user_password', 255);
            $table->date('create_time')->default(DB::raw('CURRENT_DATE'));
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('utilisateur');
    }
};

