<?php

namespace Database\Seeders;
use App\Models\Evaluacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvaluacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Evaluacion::create([
            'nombre_evaluacion' => 'Evaluación de desempeño',
            'tipo' => 'Actual'
        ]);
    }
}
