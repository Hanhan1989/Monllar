<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtributoValorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atributo_valors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_atributo')->unsigned();
            $table->string('valor');
            $table->timestamps();
        });

        Schema::table('atributo_valors', function($table){
            $table->foreign('id_atributo')->references('id')->on('atributos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atributo_valors');
    }
}
