<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 150);
            $table->string('apellido', 150);
            $table->integer('dni');
            $table->string('sexo', 50)->nullable();
            $table->string('avatar')->nullable();
            $table->unsignedInteger('paradero_id')->nullable();
            $table->timestamps();

            $table->foreign('paradero_id')->references('id')->on('paraderos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos');
    }
}
