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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->string('RunAlumno', 12)->primary();
            $table->string('Nombres', 50);
            $table->string('Apellidos', 50);
            $table->date('FechaNacimiento')->nullable();
            $table->char('Genero', 1)->nullable();
            $table->string('Direccion', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
