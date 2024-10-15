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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 45);
            $table->date('fecha_publicacion'); // Campo para la fecha de publicación
            $table->unsignedBigInteger('autor_id'); // Relación con autor
            $table->unsignedBigInteger('estanteria_id'); // Relación con estantería
            $table->timestamps();

            // Relaciones
            $table->foreign('autor_id')->references('id')->on('autores')->onDelete('cascade');
            $table->foreign('estanteria_id')->references('id')->on('estanterias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
