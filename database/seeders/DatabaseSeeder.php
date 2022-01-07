<?php

namespace Database\Seeders;

use App\Models\Areas;
use App\Models\EmpleadoRol;
use App\Models\Empleados;
use App\Models\Roles;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Areas::insert([
            ['nombre' => 'Administrativa y Financiera'],
            ['nombre' => 'Ingeniería'],
            ['nombre' => 'Desarrollo de Negocio'],
            ['nombre' => 'Proyectos'],
            ['nombre' => 'Servicios'],
            ['nombre' => 'Calidad']
        ]);

        Empleados::insert([
            ['nombre' => 'Pedro Pérez', 'email' => 'pperez@example.co', 'sexo' => 'M', 'area_id' => 3, 'boletin' => 1, 'description' => 'Hola mundo'],
            ['nombre' => 'Amalia Bayona', 'email' => 'abayona@example.co', 'sexo' => 'F', 'area_id' => 6, 'boletin' => 0, 'description' => 'Para contactar a Amalia Bayona, puede escribir al correo electrónico abayona@example.co']
        ]);

        
        Roles::insert([
            ['nombre' => 'Desarrollador'],
            ['nombre' => 'Analista'],
            ['nombre' => 'Tester'],
            ['nombre' => 'Diseñador'],
            ['nombre' => 'Profesional PMO'],
            ['nombre' => 'Profesional de servicios'],
            ['nombre' => 'Auxiliar administrativo'],
            ['nombre' => 'Codirector']
        ]);
        
        EmpleadoRol::insert([
            ['empleado_id' => 1, 'rol_id' => 4],
            ['empleado_id' => 1, 'rol_id' => 7],
            ['empleado_id' => 1, 'rol_id' => 2],
            ['empleado_id' => 2, 'rol_id' => 1],
            ['empleado_id' => 2, 'rol_id' => 2]
        ]);
        
        Empleados::factory(11)->create();
        EmpleadoRol::factory(13)->create();
    }
}
