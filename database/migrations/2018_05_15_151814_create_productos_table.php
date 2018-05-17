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
            $table->integer('id_categoria')->unsigned();
            $table->string('nombre');
            $table->string('path_imagen');
            $table->text('descripcion');
            $table->text('informacion_adicional');
            $table->double('precio', 8, 2);	
            $table->integer('stock');
            $table->timestamps();
        });

        Schema::table('producto_detalles', function($table){
            $table->foreign('id_pedido')->references('id')->on('pedidos')->onDelete('cascade');
        });
        Schema::table('producto_detalles', function($table){
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete('cascade');
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
