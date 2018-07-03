<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato_Personal extends Model
{
    protected $table = "Datos_Personales";
    protected $fillable = ['apellido_paterno','apellido_materno','nombre','sexo','fecha_nacimiento','edad','rfc','ent_nacimiento','curp','doc_id_oficial','folio','tel_fijo','tel_celular','correo','ent_fed_nacimiento'];
}
