<?php

namespace Database\Factories;

use App\Models\Empleados;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleados::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['m', 'f']);
        return [
            'nombre' => $this->faker->name(),
            'email' => $this->faker->email(),
            'sexo' => $gender,
            'area_id' => rand(1, 6),
            'boletin' => $this->faker->boolean(),
            'description' => $this->faker->sentence()
        ];
    }
}
