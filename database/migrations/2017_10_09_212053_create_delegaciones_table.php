<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDelegacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delegaciones', function (Blueprint $table) {
            $table->increments('id_delegacion');
            $table->string('nombre');
            $table->string('cargo');

            $table->string('email',60)->unique();
            $table->string('telefono');

            $table->integer('profesor_id')->unsigned();

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
        Schema::dropIfExists('delegaciones');
    }
}
