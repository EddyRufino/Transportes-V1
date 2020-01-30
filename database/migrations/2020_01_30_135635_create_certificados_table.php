<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_certificado', 200);
            $table->string('tipo_inspeccion', 80);
            $table->date('fecha_inspeccion');
            $table->string('num_inspeccion', 200);
            $table->string('resultado', 200);
            $table->string('vigencia', 150);
            $table->date('proxima_inspeccion');
            $table->unsignedInteger('vehiculo_id');
            $table->timestamps();

            $table->foreign('vehiculo_id')->references('id')->on('vehiculos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificados');
    }
}
