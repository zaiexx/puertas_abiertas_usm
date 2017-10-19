<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('carreras', function (Blueprint $table) {
            $table->increments('id_carrera');
            $table->string('nombre_carrera');
            $table->integer('sede_id')->unsigned();

            $table->timestamps();
            $table->softDeletes();

        });    

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carreras');
    }
}
