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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();

            // Relación con la clase
            $table->foreignId('clase_id')
                ->constrained('clases')
                ->onDelete('cascade');

            // Fecha y horario
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->time('hora_fin');

            // Cupos disponibles
            $table->integer('lugares_disponibles');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
