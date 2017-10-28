<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('codigo');
            $table->string('nombre', 75);
            $table->text('descripcion');
            $table->integer('categoria');
            $table->integer('stock');
            $table->integer('proveedor_id')->unsigned();
            $table->integer('marca_id')->unsigned();
            $table->integer('familia_articulos_id')->unsigned();
            $table->integer('familia_automotor_id')->unsigned();
        });
        
        Schema::table('articulos', function (Blueprint $table) {
            $table->foreign('proveedor_id')->references('id')->on('proveedores');
            $table->foreign('familia_articulos_id')->references('id')->on('familias_articulos');
            $table->foreign('marca_id')->references('id')->on('marcas');
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
        Schema::dropIfExists('articulos');
    }
}
