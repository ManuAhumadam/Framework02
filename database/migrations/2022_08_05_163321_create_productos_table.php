<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('codigounico',20);
            $table->string('nombre',100);
            $table->integer('cantidad');
            $table->text('descripcion');
            $table->integer('valor');
            $table->integer('categoria_id')->unsigned();            
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->integer('sucursal_id')->unsigned();            
            $table->foreign('sucursal_id')->references('id')->on('sucursales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
