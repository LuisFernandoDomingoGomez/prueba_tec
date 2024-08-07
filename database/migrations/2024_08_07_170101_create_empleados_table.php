<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('empresa_id')->nullable();
            $table->string('genero');
            $table->date('fecha_nac');
            $table->string('curp')->length(18);
            $table->unsignedBigInteger('telefono')->length(10);
            $table->unsignedBigInteger('sueldo_diario');
            $table->timestamps();
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
