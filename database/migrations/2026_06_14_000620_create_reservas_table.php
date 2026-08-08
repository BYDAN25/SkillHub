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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();

            // Usuario que realiza la reserva
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');

            // Horario reservado
            $table->foreignId('horario_id')
                ->constrained('horarios')
                ->onDelete('cascade');

            // Estado de la reserva
            $table->enum('estado', [
                'Reservada',
                'Cancelada',
                'Realizada'
            ])->default('Reservada');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
