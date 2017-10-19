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
            
    
            $table->foreign('carrera_id')
                  ->references('id_carrera')
                  ->on('carreras');

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
            $table->dropForeign('actividades_carrera_id_foreign');
            
        }); 
    }
}
