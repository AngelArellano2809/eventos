<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Administrador;
use App\Models\Evento;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Administrador::factory(10)
            ->has(Evento::factory()->count(3), 'eventos')
            ->create();

        Alumno::factory(10)->create();
    }
}
