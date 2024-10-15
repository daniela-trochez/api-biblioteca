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
        Schema::create('copias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('libro_id'); // Relación con el libro
            $table->unsignedBigInteger('estanteria_id'); // Relación con la estantería
            $table->integer('numero_copia'); // Número de la copia
            $table->timestamps();

            // Relaciones
            $table->foreign('libro_id')->references('id')->on('libros')->onDelete('cascade');
            $table->foreign('estanteria_id')->references('id')->on('estanterias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copias');
    }
};
