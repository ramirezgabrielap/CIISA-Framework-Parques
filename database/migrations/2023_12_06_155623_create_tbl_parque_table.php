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
        Schema::create('tbl_parque', function (Blueprint $table) {
            $table->id('ID_PARQUE');
            $table->string('NOMBRE_PARQUE', 100);
            $table->date('FECHA_VISITA');
            $table->integer('VALOR_ENTRADA');
            $table->string('DIRECCION_PARQUE', 200);
            $table->string('RECORRIDO_REALIZADO', 100);
            $table->integer('KILOMETROS_RECORRIDOS');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TBL_PARQUE');
    }
};
