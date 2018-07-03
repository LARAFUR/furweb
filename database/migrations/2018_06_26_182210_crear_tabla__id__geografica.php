<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaIdGeografica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Id_Geografica', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cve_estado',2);
            $table->string('cve_municipio',3);
            $table->string('cve_localidad',4);
            $table->string('cve_ageb',4);
            $table->string('manzana',4);
            $table->string('lote',4);
            $table->string('fecha_solicitud',10);
            $table->string('localidad',45);
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
        Schema::dropIfExists('Id_Geografica');
    }
}
