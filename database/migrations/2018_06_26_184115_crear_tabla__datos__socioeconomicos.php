<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDatosSocioeconomicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Datos_Socioeconomicos', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('jefe_hogar',['Si','No'])->default('No');
            $table->string('jefe_hogar_parentesco',50);
            $table->enum('indigena',['Si','No'])->default('No');
            $table->enum('lengua_indigena',['Si','No'])->default('No');
            $table->string('cual_lengua_indigena',25);
            $table->enum('edo_civil',['Soltero(a)','Casado(a)','Viudo(a)','Divorciado(a)','Union libre','Separado(a)'])->default('Soltero(a)');
            $table->enum('hijos',['Ninguno','Uno','Dos','Tres','Mas de tres'])->default('Ninguno');
            $table->enum('repatriado',['Si','No'])->default('No');
            $table->enum('radicar',['Menos de 1 año','De 1 a 10 años','De 11 a 20 años','Mas de 20 años'])->default('Mas de 20 años');
            $table->enum('victima_delito',['Si','No'])->default('No');
            $table->string('cual_victima_delito',50);
            $table->enum('enfermedad',['Ninguna','VIH','Cancer','Hipertension Arterial','Diabetes','Otra'])->default('Ninguna');
            $table->string('cual_enfermedad',50);
            $table->enum('embarazo',['Si','No'])->default('No');
            $table->string('meses',7);
            $table->enum('discapacidad',['No tiene discapacidad','Discapacidad fisica','Discapacidad mental','Discapacidad motriz','Discapacidad visual','Discapacidad del habla','Discapacidad auditiva','Otra discapacidad'])->default('No tiene discapacidad');
            $table->string('cual_discapacidad',50);
            $table->enum('institucion_salud',['Ninguna','IMSS','Seguro Popular','ISSEMYM','ISSSTE','PEMEX, Defensa, Marina','Otra'])->default('ISSSTE');
            $table->string('cual_institucion_salud',50);
            $table->enum('orfandad',['Solo tiene Madre','Solo tiene Padre','No tiene Padres','No presenta orfandad'])->default('No presenta orfandad');
            $table->enum('grado_estudios',['Ninguno y no sabe leer ni escribir','Ninguno, pero sabe leer y escribir','Preescolar','Primaria','Secundaria','Bachillerato, preparatoria o equivalente','Tecnico','Licenciatura','Maestria','Doctorado'])->default('Bachillerato, preparatoria o equivalente');
            $table->string('nombre_escuela',60);
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
        Schema::dropIfExists('Datos_Socioeconomicos');
    }
}
