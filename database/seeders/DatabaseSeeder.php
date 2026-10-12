<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Usuario Docente de prueba
        User::create([
            'name' => 'Profesor Carlos',
            'dni' => '12345678', // Cambiado a DNI
            'password' => Hash::make('password123'),
            'role' => 'docente',
        ]);

        // Usuario Estudiante de prueba 1
        User::create([
            'name' => 'Estudiante Juan',
            'dni' => '87654321', // Cambiado a DNI
            'password' => Hash::make('password123'),
            'role' => 'estudiante',
        ]);

        // Usuario Estudiante de prueba 2
        User::create([
            'name' => 'Estudiante Edu',
            'dni' => '11223344', // Cambiado a DNI
            'password' => Hash::make('contraseña123'),
            'role' => 'estudiante',
        ]);

        // Usuario Estudiante adicional (Al azar)
        User::create([
            'name' => 'Estudiante Sofía',
            'dni' => '44332211', // Cambiado a DNI
            'password' => Hash::make('password1234'),
            'role' => 'estudiante',
        ]);
    }
}