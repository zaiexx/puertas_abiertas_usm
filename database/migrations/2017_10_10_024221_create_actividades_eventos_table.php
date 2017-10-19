<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades_eventos', function (Blueprint $table) {
            
            $table->increments('id_actividad_evento');
            $table->integer('actividad_id')->unsigned();
            $table->integer('evento_id')->unsigned();

            $table->integer('cupos');
            $table->integer('sobre_cupos');
            $table->integer('hora_inicio_id')->unsigned();
            $table->integer('hora_termino_id')->unsigned();

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
        Schema::dropIfExists('actividades_eventos');
    }
}
