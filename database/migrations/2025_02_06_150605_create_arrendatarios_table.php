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
        Schema::create('arrendatarios', function (Blueprint $table) {
            $table->id();
            $table->char('dni', 8)->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->char('telefono', 9)->unique();
            $table->datetime('fecha_inicio_arrendamiento');
            $table->datetime('fecha_fin_arrendamiento');
            $table->integer('giro_comercial_id');
            $table->string('numero_puesto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arrendatarios');
    }
};
