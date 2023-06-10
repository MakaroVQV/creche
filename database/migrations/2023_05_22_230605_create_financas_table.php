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
        Schema::create('financas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('responsavel_id')->nullable(); 
            $table->date('vencimento');
            $table->string('valor');
            $table->string('valor_pagos');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financas');
    }
};
