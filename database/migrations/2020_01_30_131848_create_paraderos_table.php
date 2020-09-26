<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParaderosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('paraderos');
        Schema::create('paraderos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('num_operacion');//
            $table->date('fecha_expedicion');//
            $table->date('fecha_caducidad');//
            $table->string('direccion')->nullable();
            $table->string('presidente')->nullable();
            $table->integer('dni_presidente')->nullable();//
            $table->string('vicepresidente')->nullable();
            $table->integer('dni_vice_presidente')->nullable();//
            $table->string('secretario')->nullable();
            $table->integer('dni_secretario')->nullable();//
            $table->string('tesorero')->nullable();
            $table->integer('dni_tesorero')->nullable();//
            $table->date('inicio_vigencia')->nullable();
            $table->date('fin_vigencia')->nullable();
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('paraderos');
    }
}
