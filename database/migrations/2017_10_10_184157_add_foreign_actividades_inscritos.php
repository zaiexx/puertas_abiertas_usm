<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignActividadesInscritos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actividades_inscritos', function (Blueprint $table) {
            
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
        Schema::table('actividades_inscritos', function (Blueprint $table) {
            $table->dropForeign('actividades_inscritos_actividad_id_foreign');
            $table->dropForeign('actividades_inscritos_alumno_id_foreign');
        });    
    }
}
