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
        Schema::create('municipios_hns', function (Blueprint $table) {
            $table->engine="InnoDB";        
            $table->id('idMunicipiosHN');
            $table->string('nombre_municipio','50');
            $table->foreignId('deptos_id')->references('idDeptoHN')->on('departamentos_HN');
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
