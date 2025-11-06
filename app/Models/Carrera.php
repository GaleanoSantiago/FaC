<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carreras';

    protected $fillable = [
        'nombre',
        'descripcion',
        'duracion',
        'clasificacion',
        'horario',
        'numero_resolucion',
        'fecha_aprobacion',
        'fondo',
        'plan_estudio',
        'created_at',
        'updated_at'
    ];
}
