<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terapeutas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('cedula');
            $table->string('email');
            $table->string('celular');
            $table->text('observacion');
            $table->timestamps();
        });
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('terapeuta')->unsigned();
            $table->foreign('terapeuta')->references('id')->on('terapeutas');
            $table->string('nombre');
            $table->string('domicilio');
            $table->date('fecha_naciemiento');
            $table->string('instruccion');
            $table->string('ocupacion_anterior');
            $table->string('pasatiempo');
            $table->date('fecha_ingreso');
            $table->string('motivo_ingreso');
            $table->string('estado_civil');
            $table->string('nombre_conyuge');
            $table->string('celular_conyuge');
            $table->string('nombre_familiar_1');
            $table->string('parentesco_familiar_1');
            $table->string('direccion_familiar_1');
            $table->string('celular_familiar_1');
            $table->string('nombre_familiar_2');
            $table->string('parentesco_familiar_2');
            $table->string('direccion_familiar_2');
            $table->string('celular_familiar_2');
            $table->string('diagnostico');
            $table->string('medicamento');
            $table->string('doctor');
            $table->string('movilidad');
            $table->string('contraindicaciones');
            $table->text('observacion');
            $table->timestamps();
        });
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->timestamps();
        });
        Schema::create('juegos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categoria')->unsigned();
            $table->foreign('categoria')->references('id')->on('categorias');
            $table->string('nombre');
            $table->text('descripcion');
            $table->timestamps();
        });
        Schema::create('puntajes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('juego')->unsigned();
            $table->foreign('juego')->references('id')->on('juegos');
            $table->date('fecha');
            $table->dateTime('tiempo');
            $table->integer('puntos')->nullable();
            $table->bigInteger('paciente')->unsigned();
            $table->foreign('paciente')->references('id')->on('pacientes');
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
        Schema::dropIfExists('terapeutas');
        Schema::dropIfExists('pacientes');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('juegos');
        Schema::dropIfExists('puntajes');
    }
}
