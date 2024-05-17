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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('empleado'); // Cambiado a bigInteger para números grandes
            $table->string('nombre');
            $table->string('puesto');
            $table->string('sala');
            $table->string('email');
            $table->string('telefono')->nullable();; // Se mantiene como string si puede contener caracteres especiales
            $table->string('cursopa')->nullable();
            $table->string('cursopai')->nullable();;
            $table->string('cursopaf')->nullable();;
            $table->string('ciudadpa')->nullable();;
            $table->string('cursobyr')->nullable();;
            $table->string('cursobyri')->nullable();;
            $table->string('cursobyrf')->nullable();;
            $table->string('ciudadbyr')->nullable();;
            $table->string('cursomyue')->nullable();;
            $table->string('cursomyuei')->nullable();;
            $table->string('cursomyuef')->nullable();;
            $table->string('ciudadmyue')->nullable();;
            $table->string('cursoeyr')->nullable();;
            $table->string('cursoeyri')->nullable();;
            $table->string('cursoeyrf')->nullable();;
            $table->string('ciudadeyr')->nullable();;
            $table->timestamps();
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
