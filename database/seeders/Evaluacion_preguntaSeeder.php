<?php

namespace Database\Seeders;
use App\Models\Evaluacion_pregunta;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Evaluacion_preguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Evaluacion_pregunta::create([
            'pregunta' => 'Pregunta 1',
            'orden' => 1,
            'id_evaluacion' => 1,
            'id_categoria' => 1
        ]);

        Evaluacion_pregunta::create([
            'pregunta' => 'Pregunta 2',
            'orden' => 2,
            'id_evaluacion' => 1,
            'id_categoria' => 1
        ]);

        Evaluacion_pregunta::create([
            'pregunta' => 'Pregunta 3',
            'orden' => 3,
            'id_evaluacion' => 1,
            'id_categoria' => 1
        ]);

        Evaluacion_pregunta::create([
            'pregunta' => 'Pregunta 4',
            'orden' => 4,
            'id_evaluacion' => 1,
            'id_categoria' => 2
        ]);

        Evaluacion_pregunta::create([
            'pregunta' => 'Pregunta 5',
            'orden' => 5,
            'id_evaluacion' => 1,
            'id_categoria' => 2
        ]);

        Evaluacion_pregunta::create([
            'pregunta' => 'Pregunta 6',
            'orden' => 6,
            'id_evaluacion' => 1,
            'id_categoria' => 2
        ]);
    }
}
