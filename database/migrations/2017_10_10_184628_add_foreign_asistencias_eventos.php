<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignAsistenciasEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asistencias_eventos', function (Blueprint $table) {
            
            $table->foreign('evento_id')
                  ->references('id_evento')
                  ->on('eventos');

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
        Schema::table('asistencias_eventos', function (Blueprint $table) {
            $table->dropForeign('asistencias_eventos_evento_id_foreign');
            $table->dropForeign('asistencias_eventos_alumno_id_foreign');
        });  
    }
}
