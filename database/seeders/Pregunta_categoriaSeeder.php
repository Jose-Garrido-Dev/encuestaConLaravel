<?php

namespace Database\Seeders;
use App\Models\Pregunta_categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Pregunta_categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pregunta_categoria::create([
            'nombre_categoria' => 'Categoria 1'
        ]);

        Pregunta_categoria::create([
            'nombre_categoria' => 'Categoria 2'
        ]);

    }
}
