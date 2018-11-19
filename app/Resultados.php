<?php

namespace Maraton;

use Illuminate\Database\Eloquent\Model;

class Resultados extends Model
{
    protected $table = 'resultados';

    protected $fillable = [
        'ejercicios', 'posicion', 'estado', 'decision',
    ];
}
