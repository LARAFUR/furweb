<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Id_Geografica extends Model
{
    protected $table = "Id_Geografica";
    protected $fillable = ['cve_estado','cve_municipio','cve_localidad','cve_ageb','manzana','lote','fecha_solicitud','localidad'];
}
