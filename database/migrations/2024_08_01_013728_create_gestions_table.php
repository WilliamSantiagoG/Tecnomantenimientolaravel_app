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
        Schema::create('gestions', function (Blueprint $table) {

            $table->bigIncrements('idGestion'); // Cambiar el nombre de id a idGestion
            $table->unsignedBigInteger('idUsuario'); // Agregar columna idUsuario
            $table->string('DescripcionCliente');
            $table->string('EstadoFisico');
            $table->string('Conclusiones');
            $table->string('Modelo');
            $table->text('Imagenes');
            $table->date('fecha_mantenimiento')->nullable();
            $table->timestamps();

            // Definir la clave foránea
            $table->foreign('idUsuario')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestions');
    }
};
