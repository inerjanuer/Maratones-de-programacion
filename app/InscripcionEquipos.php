<?php

namespace Maraton;

use Illuminate\Database\Eloquent\Model;

class InscripcionEquipos extends Model
{
    protected $table = 'inscripcion_equipos';

    protected $fillable = [
        'nombreEquipo', 'codigo', 'semestre', 'nombreApellidos','correo','categorias',
        'codigo2', 'semestre2', 'nombreApellidos2','correo2','categorias2',
        'codigo3', 'semestre3', 'nombreApellidos3','correo3','categorias3',
        'nombreProfesor','correoProfesor',
    ];
}
