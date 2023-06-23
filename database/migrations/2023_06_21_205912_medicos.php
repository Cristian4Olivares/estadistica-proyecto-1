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
        Schema::create('medicos', function (Blueprint $table) {
            $table->engine="InnoDB";        
            $table->id('idDoctores');
            $table->bigInteger('identidad_medico');
            $table->string('nombre_medico','50');
            $table->string('celular_medico','50');
            $table->string('estado_medico','50');
            $table->foreignId('especialidad_id')->references('idEspecialidadMed')->on('especialidad_medicos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
