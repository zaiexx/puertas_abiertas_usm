<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignCarreras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carreras', function (Blueprint $table) {
           
            $table->foreign('sede_id')
                ->references('id_sede')
                ->on('sedes');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carreras', function (Blueprint $table) {
            $table->dropForeign('carreras_sede_id_foreign');
        }); 
    }
}
