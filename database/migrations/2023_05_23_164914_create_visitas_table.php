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
        Schema::create('visitas', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_visita');
            $table->dateTime('hora_visita');
            $table->string('descripcion');
            $table->foreignId('id_mascotas')->constrained('mascotas')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_veterinarios')->constrained('veterinarios')->cascadeOnUpdate()->cascadeOnDelete();    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitas');
    }
};
