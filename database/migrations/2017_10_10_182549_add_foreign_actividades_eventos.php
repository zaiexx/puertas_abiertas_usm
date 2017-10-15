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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eventos_inscritos', function (Blueprint $table) {
            $table->dropForeign('actividades_eventos_evento_id_foreign');
            $table->dropForeign('actividades_eventos_actividad_id_foreign');
        });
    }
}
