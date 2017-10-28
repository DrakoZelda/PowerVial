<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliasArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familias_articulos', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('nombre', 50);
          $table->integer('familia_articulos_id')->unsigned();
          $table->integer('familia_automotor_id')->unsigned();
        });
        Schema::table('familias_articulos', function($table){
            $table->foreign('familia_articulos_id')->references('id')->on('familias_articulos')->nullable();
            $table->foreign('familia_automotor_id')->references('id')->on('familias_automotor');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familias_articulos');
    }
}
