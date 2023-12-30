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
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->ipAddress('ip_reporta');
            $table->string('nombre_maquina_reporta', 100);
            $table->ipAddress('ip_asiste')->nullable(true);
            $table->string('nombre_maquina_asiste', 100)->nullable(true);
            $table->enum('status', ['alerta', 'asistencia', 'finalizado'])->default('alerta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};
