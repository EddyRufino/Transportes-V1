<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('num_licencia');
            $table->string('clase', 45);
            $table->date('fecha_expedicion');
            $table->date('fecha_revalidacion');
            $table->string('restricciones', 100);
            $table->string('domicilio', 150);
            $table->string('sangre', 50);
            $table->integer('num_expediente');
            $table->string('nacionalidad', 50);
            $table->date('fecha_nacimiento');
            $table->unsignedInteger('categoria_id');
            $table->unsignedInteger('dato_id');
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('dato_id')->references('id')->on('datos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licencias');
    }
}
