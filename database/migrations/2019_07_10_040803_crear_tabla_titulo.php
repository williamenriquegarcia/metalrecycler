<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTitulo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulo', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id_titulo');
            $table->string('ruta_foto');
            $table->integer('numero_disponibles');
            $table->integer('id_genero')->unsigned();
            $table->foreign('id_genero')->references('id_genero')->on('genero');
            $table->integer('id_sello')->unsigned();
            $table->foreign('id_sello')->references('id_sello')->on('sello');
            $table->integer('id_pais')->unsigned();
            $table->foreign('id_pais')->references('id_pais')->on('pais_origen');
            $table->integer('id_departamento')->unsigned();
            $table->foreign('id_departamento')->references('id_departamento')->on('departamento');
            $table->integer('id_formato')->unsigned();
            $table->foreign('id_formato')->references('id_formato')->on('formato');
            $table->integer('id_estado')->unsigned();
            $table->foreign('id_estado')->references('id_estado')->on('estado');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('titulo');
    }
}
