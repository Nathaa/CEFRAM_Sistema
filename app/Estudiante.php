<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    //

    protected $fillable = [
        'nombre', 'apellido', 'fecha_nacimiento', 'edad', 'direccion', 'encargado', 'parentesco', 'telefono_emergencia', 
        'padecimientos', 'descripcion_padecimiento', 'alergia_medicamento', 'nombre_padre', 'profesion_padre', 
        'telefono_padre', 'nombre_madre', 'profesion_madre','telefono_madre', 'fecha_creacion',
    ];
}
