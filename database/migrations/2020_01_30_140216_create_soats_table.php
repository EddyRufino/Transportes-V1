<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_poliza', 200);
            $table->string('uso_vehiculo', 80);
            $table->date('inicio_poliza');
            $table->date('fin_poliza');
            $table->date('inicio_certificado');
            $table->date('fin_certificado');
            $table->date('fecha_hoy');
            $table->string('hora_emision', 50);
            $table->string('monto_prima', 80);
            $table->string('descripcion', 200);
            $table->integer('telefono');
            $table->unsignedInteger('vehiculo_id');
            $table->unsignedInteger('dato_id');
            $table->timestamps();

            $table->foreign('vehiculo_id')->references('id')->on('vehiculos');
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
        Schema::dropIfExists('soats');
    }
}
