<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gestao_sistemas', function (Blueprint $table) {
            $table->id();
            $table->string('descricao',90)->nullable();
            $table->string('link',90);
            $table->string('usuario',90)->nullable();
            $table->string('senha', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestao_sistemas');
    }
};
