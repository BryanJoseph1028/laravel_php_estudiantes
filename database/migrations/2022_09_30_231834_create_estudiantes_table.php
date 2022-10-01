<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes_1', function (Blueprint $table) {
            $table->id();
            $table->integer('id_estudiante');
            $table->string('carne');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('direccion');
            $table->string('correo_electronico');
            $table->string('id_tipo_sangre');
            $table->date('fecha_nacimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
};
