<?php

namespace Database\Factories;

use App\Models\EmpleadoRol;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadosRolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmpleadoRol::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'empleado_id' => rand(3, 13),
            'rol_id' => rand(1, 8)
        ];
    }
}
