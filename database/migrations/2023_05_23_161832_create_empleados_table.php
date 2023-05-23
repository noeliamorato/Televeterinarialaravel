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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->integer('ci');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('genero');
            $table->string('foto');
            $table->string('direccion');
            $table->integer('telefono');
            $table->integer('telf_movil');
            $table->string('correo');
            $table->foreignId('id_roles')->constrained('roles')->cascadeOnUpdate()->cascadeOnDelete();          
            $table->foreignId('id_especializaciones')->constrained('especializaciones')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_departamentos')->constrained('departamentos')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_municipios')->constrained('municipios')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
