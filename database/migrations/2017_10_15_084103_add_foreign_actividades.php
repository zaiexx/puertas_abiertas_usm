<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignActividades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('actividades', function (Blueprint $table) {
            
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
        Schema::table('actividades', function (Blueprint $table) {
            $table->dropForeign('actividades_hora_inicio_id_foreign');
            $table->dropForeign('actividades_hora_termino_id_foreign');
        }); 
    }
}
