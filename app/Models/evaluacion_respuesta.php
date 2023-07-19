<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evaluacion_respuesta extends Model
{
    use HasFactory;
    protected $fillable = [
        'rut_evaluador', // Agrega aquí los demás atributos que deseas asignar masivamente
        'rut_evaluado',
        'id_pregunta',
        'id_alternativa',
        'estado',
        'fecha',
        'id_evaluacion',
    ];


}
