<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('zona_registral', 150);
            $table->string('oficina_regional', 150);
            $table->string('placa', 80);
            $table->integer('partida_registral');
            $table->integer('titulo');
            $table->date('fecha_titulo');
            $table->string('condicion', 80);
            $table->string('marca', 80);
            $table->string('color', 80);
            $table->string('modelo', 80);
            $table->string('motor', 100);
            $table->string('combustible', 80);
            $table->string('vim', 150);
            $table->string('serie', 150);
            $table->date('anio_fabrica');
            $table->date('anio_modelo');
            $table->string('version', 150);
            $table->string('ejes', 50);
            $table->integer('asientos');
            $table->integer('pasajeros');
            $table->integer('ruedas');
            $table->string('carroceria', 80);
            $table->string('potencia', 80);
            $table->string('cilindros', 80);
            $table->string('cilindradas', 80);
            $table->string('p_bruto', 80);
            $table->string('p_neto', 80);
            $table->string('carga_util', 80);
            $table->string('longitud', 80);
            $table->string('altura', 80);
            $table->string('ancho', 80);
            $table->unsignedInteger('categoria_id');
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
