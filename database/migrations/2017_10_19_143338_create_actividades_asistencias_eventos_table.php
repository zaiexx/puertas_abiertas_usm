<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesAsistenciasEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('actividades_asistencias_eventos', function (Blueprint $table) {
            $table->increments('id_actividad_asistencia_evento');
            $table->integer('actividad_evento_id')->unsigned();
            $table->integer('alumno_id')->unsigned();

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
        Schema::dropIfExists('actividades_asistencias_eventos');
    }
}
