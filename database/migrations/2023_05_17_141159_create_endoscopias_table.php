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
        Schema::create('endoscopias', function (Blueprint $table) {
            $table->id();
            $table->datetime('fechaRegistro');
            $table->bigInteger('facturaNumero');
            $table->bigInteger('expediente');
            $table->string('nombre','50');
            /* $table->string('char','1');
            $table->string('categoria','50');
            $table->datetime('FechaNacimiento');
            $table->bigInteger('edad');
            $table->string('grado','50');
            $table->string('fuerza','50');
            $table->string('estudio','50');
            $table->string('area','50');
            $table->string('medico','50');*/
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('endoscopias');
    }
};
