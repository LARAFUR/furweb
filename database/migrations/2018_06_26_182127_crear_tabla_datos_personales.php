<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDatosPersonales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Datos_Personales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apellido_paterno',45);
            $table->string('apellido_materno',45);
            $table->string('nombre',45);
            $table->enum('sexo',['H','M'])->default('H');
            $table->string('fecha_nacimiento',10);
            $table->integer('edad')->default(18);
            $table->string('rfc',20);
            $table->enum('ent_nacimiento',['AGUSCALIENTES','BAJA CALIFORNIA','BAJA CALIFORNIA SUR','CAMPECHE','CIUDAD DE MEXICO','CHIAPAS','CHIHUAHUA','COAHUILA','COLIMA','DURANGO','ESTADO DE MEXICO','GUANAJUATO','GUERRERO','HIDALGO','JALISCO','MICHOACAN','MORELOS','NACIDO EN EL EXTRANJERO','NAYARIT','NUEVO LEON','OAXACA','PUEBLA','QUERETARO','QUINTANA ROO','SAN LUIS POTOSI','SIN ESPECIFICAR','SINALOA','SONORA','TABASCO','TAMAULIPAS','TLAXCALA','VERACRUZ','YUCATAN','ZACATECAS'])->default('ESTADO DE MEXICO');
            $table->string('curp',20);
            $table->string('doc_id_oficial',50);
            $table->string('folio',50);
            $table->string('tel_fijo',15);
            $table->string('tel_celular',15);
            $table->string('correo',50);
            $table->string('ent_fed_nacimiento',50);
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
        Schema::dropIfExists('Datos_Personales');
    }
}
