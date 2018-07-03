<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaIngresoJoven extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ingreso_Joven', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('hogar',['Zona urbana','Zona rural'])->default('Zona urbana');
            $table->enum('trabaja',['Si','No'])->default('No');
            $table->enum('monto_pago_mensual',['Ninguno','De $1 a $500','De $501 a $1,000','De $1,001 a $1,500','De $1,501 a $2,000','Mas de $2,000'])->default('Ninguno');
            $table->enum('estudiando',['Si','No'])->default('Si');
            $table->enum('ingreso_jefe',['Si','No'])->default('Si');
            $table->enum('monto_mensual_jefe',['Ninguno','De $1 a $500','De $501 a $1,000','De $1,001 a $1,500','De $1,501 a $2,000','Mas de $2,000'])->default('Ninguno');
            $table->enum('beca_escolar',['Si','No'])->default('No');
            $table->enum('periocidad_beca',['Mensual','Semestral','Anual'])->default('Mensual');
            $table->string('monto_beca',7);
            $table->string('monto_mensual_transporte',7);
            $table->enum('tiempo_traslado_escuela',['menos de 5 min','entre 5 y 15 min','entre 15 y 30 min','mas de 30 min'])->default('mas de 30 min');
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
        Schema::dropIfExists('Ingreso_Joven');
    }
}
