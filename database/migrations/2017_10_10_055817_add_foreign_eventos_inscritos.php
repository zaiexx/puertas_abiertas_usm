<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignEventosInscritos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eventos_inscritos', function (Blueprint $table) {
            
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
        Schema::table('eventos_inscritos', function (Blueprint $table) {
            $table->dropForeign('eventos_inscritos_evento_id_foreign');
            $table->dropForeign('eventos_inscritos_alumno_id_foreign');
        
        });    
    }
}
