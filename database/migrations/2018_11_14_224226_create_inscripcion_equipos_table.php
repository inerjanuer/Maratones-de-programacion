<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion_equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreEquipo');
            $table->string('codigo');
            $table->integer('semestre');
            $table->string('nombreApellidos');
            $table->string('correo');
            $table->string('categorias');
            $table->string('codigo2');
            $table->integer('semestre2');
            $table->string('nombreApellidos2');
            $table->string('correo2');
            $table->string('categorias2');
            $table->string('codigo3');
            $table->integer('semestre3');
            $table->string('nombreApellidos3');
            $table->string('correo3');
            $table->string('categorias3');
            $table->string('nombreProfesor');
            $table->string('correoProfesor');
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
        Schema::dropIfExists('inscripcion_equipos');
    }
}
