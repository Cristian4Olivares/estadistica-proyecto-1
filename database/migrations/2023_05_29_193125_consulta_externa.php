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
            $table->engine = 'InnoDB';
            $table->id('idConsultaExt')->unsigned;
            $table->date('fechaRegistro');
            $table->bigInteger('facturaNumero');
            $table->bigInteger('expediente');
            $table->string('nombre','50');
            $table->foreignId('fuerza_id')->references('id')->on('fuerzas');
           // $table->foreignId('fuerza_id')->references('id')->on('fuerzas');
            $table->timestamps(); 
        });
        /* Schema::table('consultaExternas', function (Blueprint $table) {
            $table->foreignId('fuerza_id')->references('idFuerza')->on('fuerzas'); 
        }); */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        /* Schema::table('consultaExternas', function (Blueprint $table) {
            $table->dropForeign('consultaExternas_fuerza_id_foreign');
        }); */
    }
};
