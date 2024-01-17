<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstname(),
            'email' => $this->faker->email(),
            'fecha_nacimiento' => $this->faker->date(),
            'genero' => $this->faker->randomElement(['Masculino', 'Femenino', 'Otros']),
        ];
    }
}
