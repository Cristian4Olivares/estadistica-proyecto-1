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
        Schema::create('emergencia_general', function (Blueprint $table) {
            $table->engine="InnoDB";        
            $table->id('id_emergencia');
            $table->date('Fecha_Registro');
            $table->foreignId('paciente_id')->references('id_paciente')->on('pacientes');
            $table->bigInteger('edad','20');
            $table->foreignId('depto_id')->references('idDeptoHN')->on('departamentos_hns');
            $table->foreignId('municipio_id')->references('idColonias')->on('colonias_hns');
            $table->string('nombre_colonia','50');
            $table->foreignId('especialidad_id')->references('idEspecialidadMed')->on('especialidad_medicos');
            $table->foreignId('medico_id')->references('idColonias')->on('colonias_hns');
            $table->string('Diagnostico','50');
            $table->string('turno','50');
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
