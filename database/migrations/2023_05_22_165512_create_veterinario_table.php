<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('veterinario', function (Blueprint $table) {
            $table->id();
            $table->string('ci');
            $table->string('nombres');
            $table->string('apellidos');
            $table->foreignId('id_especializaciones')->constrained('especializaciones')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('genero');
            $table->string('telefono');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('veterinario');
    }
};
