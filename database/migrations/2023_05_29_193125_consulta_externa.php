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
        //

        Schema::create('consultaExternas', function (Blueprint $table) {
            $table->id('idConsultaExt');
            $table->date('fechaRegistro');
            $table->bigInteger('facturaNumero');
            $table->bigInteger('expediente');
            $table->string('nombre','50');
            $table->unsignedBigInteger('fuerza_id');
            $table->foreign('fuerza_id')->references('id_fueza')->on('fuerza')->onDelete('cascade');
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
