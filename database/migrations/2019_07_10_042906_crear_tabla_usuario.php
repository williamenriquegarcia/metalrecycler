<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id_usuario');
            $table->string('telefono');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('clave');
            $table->integer('id_pais')->unsigned();
            $table->foreign('id_pais')->references('id_pais')->on('pais_origen');
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
        Schema::drop('usuario');
    }
}
