<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignActividadesEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('actividades_eventos', function (Blueprint $table) {
            
            $table->foreign('evento_id')
                  ->references('id_evento')
                  ->on('eventos');

            $table->foreign('actividad_id')
                  ->references('id_actividad')
                  ->on('actividades');

            $table->foreign('hora_inicio_id')
                  ->references('id_horario')
                  ->on('horarios');


            $table->foreign('hora_termino_id')
                  ->references('id_horario')
                  ->on('horarios');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actividades_eventos', function (Blueprint $table) {
            $table->dropForeign('actividades_eventos_evento_id_foreign');
            $table->dropForeign('actividades_eventos_actividad_id_foreign');
            $table->dropForeign('actividades_eventos_hora_inicio_id_foreign');
            $table->dropForeign('actividades_eventos_hora_termino_id_foreign');
    
    
        });
    }
}
