<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'rut' => '11111111-1',
            'nombre' => 'Evaluador 1',
            'email' => 'maiil@enovus1.cl',
            'password' => bcrypt('1111'),
            'cargo' => 'jefatura',
            'estado' => 'Activo',
            'perfil' => 'Evaluador'
        ]);

        User::create([
            'rut' => '22222222-2',
            'nombre' => 'Evaluador 2',
            'email' => 'maiil@enovus2.cl',
            'password' => bcrypt('2222'),
            'cargo' => 'jefatura',
            'estado' => 'Activo',
            'perfil' => 'Evaluador'
        ]);

        User::create([
            'rut' => '33333333-3',
            'nombre' => 'Evaluado 1',
            'email' => 'maiil@enovus3.cl',
            'password' => bcrypt('3333'),
            'cargo' => 'Analista',
            'estado' => 'Activo',
            'perfil' => 'Evaluado'
        ]);

        User::create([
            'rut' => '44444444-4',
            'nombre' => 'Evaluado 2',
            'email' => 'maiil@enovus4.cl',
            'password' => bcrypt('4444'),
            'cargo' => 'Analista',
            'estado' => 'Activo',
            'perfil' => 'Evaluado'
        ]);

        User::create([
            'rut' => '55555555-5',
            'nombre' => 'Evaluado 3',
            'email' => 'maiil@enovus5.cl',
            'password' => bcrypt('5555'),
            'cargo' => 'Analista',
            'estado' => 'Inactivo',
            'perfil' => 'Evaluado'
        ]);

        User::create([
            'rut' => '66666666-6',
            'nombre' => 'Evaluado 4',
            'email' => 'maiil@enovus6.cl',
            'password' => bcrypt('6666'),
            'cargo' => 'Programador',
            'estado' => 'Activo',
            'perfil' => 'Evaluado'
        ]);

        User::create([
            'rut' => '77777777-7',
            'nombre' => 'Evaluado 5',
            'email' => 'maiil@enovus7.cl',
            'password' => bcrypt('7777'),
            'cargo' => 'Programador',
            'estado' => 'Activo',
            'perfil' => 'Evaluado'
        ]);

        User::create([
            'rut' => '88888888-8',
            'nombre' => 'Evaluado 6',
            'email' => 'maiil@enovus8.cl',
            'password' => bcrypt('8888'),
            'cargo' => 'Programador',
            'estado' => 'Activo',
            'perfil' => 'Evaluado'
        ]);

        User::create([
            'rut' => '9999999-9',
            'nombre' => 'admin',
            'email' => 'adm@enovus.cl',
            'password' => bcrypt('admin@'),
            'cargo' => 'sa',
            'estado' => 'Activo',
            'perfil' => 'Admin'
        ]);

    }
}
