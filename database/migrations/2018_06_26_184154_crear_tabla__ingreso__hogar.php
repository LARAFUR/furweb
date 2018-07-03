<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaIngresoHogar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ingreso_Hogar', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('hogar',['Zona urbana','Zona rural'])->default('Zona urbana');
            $table->enum('trabaja',['Si','No'])->default('No');
            $table->enum('empleo_actual',['Permanente','Honorarios','Eventualmente','Otro'])->default('Honorarios');
            $table->string('otro_empleo_actual',50);
            $table->enum('en_que_trabaja',['Labores del hogar','Profesionista','Comerciante','Empleado(a)','Obrero(a)','Artesano(a)','Campesino(a)','Crianza de animales','Albañil','Otro'])->default('Labores del hogar');
            $table->string('otro_en_que_trabaja',50);
            $table->enum('monto_mensual',['Ninguno','De $1 a $500','De $501 a $1,000','De $1,001 a $1,500','De $1,501 a $2,000','Mas de $2,000']);
            $table->enum('algun_ingreso',['Si','No'])->default('No');
            $table->string('tipo_ingreso',50);
            $table->string('monto_ingreso',20);
            $table->enum('ingreso_alquilar',['Si','No'])->default('No');
            $table->string('monto_alquilar',20);
            $table->enum('ingreso_jubilacion',['Si','No'])->default('No');
            $table->string('monto_jubilacion',20);
            $table->enum('ingreso_total_mensual',['Ninguno','De $1 a $500','De $501 a $1,000','De $1,001 a $1,500','De $1,501 a $2,000','Mas de $2,000'])->default('Mas de $2,000');
            $table->enum('dependientes_economicos',['Ninguno','De uno a dos','De tres a cuatro','Cinco o mas'])->default('De uno a dos');
            $table->integer('conyugue')->default(0);
            $table->integer('hijos')->default(0);
            $table->integer('padres')->default(0);
            $table->integer('hermanos')->default(0);
            $table->integer('sobrinos')->default(0);
            $table->integer('abuelos')->default(0);
            $table->integer('nuera')->default(0);
            $table->integer('yerno')->default(0);
            $table->integer('suegro')->default(0);
            $table->integer('nietos')->default(0);
            $table->integer('sin_parentesco')->default(0);
            $table->integer('otro')->default(0);
            $table->string('dep_eco_otro',50);
            $table->enum('integrante_apoyo_programa',['Si','No'])->default('No');
            $table->integer('cuantos_integrante_apoyo_programa')->default(0);
            $table->string('cuales_integrante_apoyo_programa',60);
            $table->integer('total_personas')->default(1);
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
        Schema::dropIfExists('Ingreso_Hogar');
    }
}
