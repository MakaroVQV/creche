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
        Schema::create('fichas_medica', function (Blueprint $table) {
            $table->id();
            $table->string('altura');
            $table->string('peso');
            $table->longText('alergias');
            $table->longText('medicamentos');
            $table->string('tipo_sanguineo');
            $table->longText('observacoes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichas_medica');
    }
};
