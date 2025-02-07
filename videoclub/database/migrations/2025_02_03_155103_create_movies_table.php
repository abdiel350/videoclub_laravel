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
        Schema::create('movies', function (Blueprint $table) {
            $table->id(); // Campo autoincremental
            $table->string('title'); // Título de la película
            $table->string('year', 8); // Año (ej: "1995")
            $table->string('director', 64); // Nombre del director
            $table->string('poster'); // URL del póster
            $table->boolean('rented')->default(false); // Estado (alquilado o no)
            $table->text('synopsis'); // Sinopsis
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
