<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evaluacion_pregunta extends Model
{
    use HasFactory;
    protected $fillable = ['id_evaluacion', 'pregunta'];
    
    public function evaluacion()
    {
        return $this->belongsTo(evaluacion::class, 'id_evaluacion');
    }

    public function evaluacion_alternativas()
    {
        return $this->hasMany(evaluacion_alternativa::class, 'id_pregunta');
    }

}
