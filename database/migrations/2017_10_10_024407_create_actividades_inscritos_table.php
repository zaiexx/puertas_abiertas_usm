<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesInscritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades_inscritos', function (Blueprint $table) {
            $table->increments('actividades_inscritos');
            $table->integer('actividad_id')->unsigned();
            $table->integer('alumno_id')->unsigned(); 

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
        Schema::dropIfExists('actividades_inscritos');
    }
}
