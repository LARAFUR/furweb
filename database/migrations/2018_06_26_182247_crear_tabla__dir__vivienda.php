<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDirVivienda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Dir_Vivienda', function (Blueprint $table) {
            $table->increments('id');
            $table->string('calle',60);
            $table->string('num_exterior',5);
            $table->string('num_interior',5);
            $table->string('colonia',60);
            $table->string('codigo_postal',5);
            $table->string('entre_calle');
            $table->string('y_calle');
            $table->string('rasgo_fisico');
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
        Schema::dropIfExists('Dir_Vivienda');
    }
}
