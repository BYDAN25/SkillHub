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
        Schema::create('clases', function (Blueprint $table) {
            $table->id();

            // Llaves foráneas
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
            $table->foreignId('ubicacion_id')->constrained('ubicaciones')->onDelete('cascade');
            $table->foreignId('nivel_id')->constrained('niveles')->onDelete('cascade');

            // Información de la clase
            $table->string('nombre', 150);
            $table->text('descripcion');
            $table->string('instructor', 120);

            // Duración en minutos
            $table->integer('duracion');

            // Precio
            $table->decimal('costo', 10, 2);

            // Cupo máximo
            $table->integer('cupo_maximo');

            // Ruta de la imagen
            $table->string('imagen')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clases');
    }
};
