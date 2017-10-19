<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosInscritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos_inscritos', function (Blueprint $table) {
            $table->increments('id_evento_inscrito');
            $table->integer('evento_id')->unsigned();
            $table->integer('alumno_id')->unsigned();
            $table->boolean('delegacion');
            

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos_inscritos');
    }
}
