<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignActividadesAsistencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actividades_asistencias', function (Blueprint $table) {
            
            $table->foreign('actividad_id')
                  ->references('id_actividad')
                  ->on('actividades');

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
        Schema::table('actividades_asistencias', function (Blueprint $table) {
            $table->dropForeign('actividades_asistencias_actividad_id_foreign');
            $table->dropForeign('actividades_asistencias_alumno_id_foreign');
        });  
    }
}
