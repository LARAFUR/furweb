<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dir_Vivienda extends Model
{
    protected $table = "Dir_Vivienda";
    protected $fillable = ['calle','num_exterior','num_interior','colonia','codigo_postal','entre_calle','y_calle','rasgo_fisico'];
}
