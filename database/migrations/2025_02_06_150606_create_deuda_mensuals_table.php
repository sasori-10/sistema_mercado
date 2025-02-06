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
        Schema::create('deuda_mensuals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('arrendatario_id')->constrained();
            $table->integer('año');
            $table->integer('mes');
            $table->decimal('monto', 8, 2);
            $table->decimal('pagado', 8, 2);
            $table->datetime('fecha_pago');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deuda_mensuals');
    }
};
