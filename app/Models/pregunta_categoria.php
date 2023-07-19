<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pregunta_categoria extends Model
{
    use HasFactory;

    public function evaluacion_preguntas(){
        return $this->hasMany(evaluacion_pregunta::class);
    }

    
}
