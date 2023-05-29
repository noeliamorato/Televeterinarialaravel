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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->dateTime('fecha_nacimiento');
            $table->integer('edad');
            $table->string('raza');
            $table->string('color');
            $table->double('peso');
            $table->double('longitud');
            $table->string('vacunas');
            $table->string('foto');
            $table->string('genero');
            $table->string('estado_ingreso');
            $table->string('estado_salida');
            $table->dateTime('fecha_ingreso');
            $table->dateTime('fecha_salida');
            $table->string('observaciones');
            $table->foreignId('id_familia_mascotas')->constrained('familia_mascotas')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_veterinarios')->constrained('veterinarios')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_propietario_mascotas')->constrained('propietario_mascotas')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
