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
        Schema::create('pago_arrendatarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('arrendatario_id')->constrained();
            $table->integer('año');
            $table->string('codigo_ticks');
            $table->decimal('monto', 8, 2);
            $table->datetime('fecha_pago');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pago_arrendatarios');
    }
};
