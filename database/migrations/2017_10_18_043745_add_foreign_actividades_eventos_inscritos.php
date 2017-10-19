<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignActividadesEventosInscritos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('actividades_eventos_inscritos', function (Blueprint $table) {
            
            $table->foreign('actividad_evento_id')
                  ->references('id_actividad_evento')
                  ->on('actividades_eventos');


           $table->foreign('alumno_id')
                  ->references('id_alumno')
                  ->on('alumnos');


        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actividades_eventos_inscritos', function (Blueprint $table) {
            $table->dropForeign('actividades_eventos_inscritos_actividad_evento_id_foreign');
            $table->dropForeign('actividades_eventos_inscritos_alumno_id_foreign');
        });  
    }
}
