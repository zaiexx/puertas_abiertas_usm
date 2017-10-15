<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->increments('id_actividad');
            $table->string('nombre_actividad');
            $table->string('descripcion');
            $table->integer('hora_inicio_id')->unsigned();
            $table->integer('hora_termino_id')->unsigned();
            $table->integer('cupos');
            $table->integer('sobre_cupos');
            
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
        Schema::dropIfExists('actividades');
    }
}
