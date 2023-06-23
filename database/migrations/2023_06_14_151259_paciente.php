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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id('id_paciente');
            $table->date('fecha_nacimiento');
            $table->bigInteger('identidad_paciente');
            $table->bigInteger('numero_serie');
            $table->bigInteger('edad_paciente');
            $table->string('celular_paciente','50');
            $table->string('correo_paciente','50');
            $table->string('nombre_paciente','50');
            $table->string('apellido_paciente','50');
            $table->foreignId('grado_id')->references('idGrado')->on('grados');
            $table->foreignId('fuerza_id')->references('id')->on('fuerzas');
            $table->foreignId('genero_id')->references('idGenero')->on('generos');
            $table->foreignId('categoria_id')->references('id')->on('categorias');
            $table->bigInteger('estado_paciente');
            $table->timestamps(); 
        });

        /* Schema::table('grados', function (Blueprint $table) {
            $table->foreign('grado_id')->references('idGrado')->on('grados')->onDelete('cascade');
            $table->foreign('fuerza_id')->references('idFuerza')->on('fuerzas')->onDelete('cascade');
            $table->foreign('genero_id')->references('idGenero')->on('generos')->onDelete('cascade');
            $table->foreign('categoria_id')->references('idCategoria')->on('categorias')->onDelete('cascade');
           
        }); */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
