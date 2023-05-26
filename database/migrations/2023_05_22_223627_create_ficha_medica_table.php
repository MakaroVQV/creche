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
        Schema::create('ficha_medica', function (Blueprint $table) {
            $table->id();
            $table->string('altura');
            $table->string('peso');
            $table->string('alergias');
            $table->string('medicamentos');
            $table->string('tipo sanguineo');
            $table->string('vacinas');
            $table->string('observacoes');
            $table->string('aluno_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ficha_medica');
    }
};
