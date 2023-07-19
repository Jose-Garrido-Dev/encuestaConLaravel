<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evaluacion_alternativa extends Model
{
    use HasFactory;

    protected $fillable = ['id_pregunta', 'alternativa'];

    public function evaluacion_pregunta()
    {
        return $this->belongsTo(evaluacion_pregunta::class, 'id_pregunta');
    }

}
