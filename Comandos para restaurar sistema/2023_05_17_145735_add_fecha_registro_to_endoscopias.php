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
        Schema::table('endoscopias', function (Blueprint $table) {
            //
            $table->datetime('FechaRegistro') ->after('facturaNumero')->nullable;
            $table->datetime('FechaNacimiento');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('endoscopias', function (Blueprint $table) {
            //
        });
    }
};
