<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('color');
            $table->boolean('automatico');
            $table->integer('fabricante_id')->unsigned();
            $table->timestamps();

            $table->foreign('fabricante_id')->references('id')->on('fabricantes')->onDelete('cascade');
        });
        return "Vehiculos Guardados";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vehiculos');
    }
}
