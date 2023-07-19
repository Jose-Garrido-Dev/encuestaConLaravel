<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evaluacion extends Model
{
    use HasFactory;

    public function evaluacion_preguntas(){
        return $this->hasMany(evaluacion_pregunta::class, 'id_evaluacion');
    }

    
}
