<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class peliculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->name(),
            'año' => fake()->year(),
            'genero' => fake()->randomElement(["Terror", "Accion", "Romance"]),
            'descripcion' => fake()->randomElement(),
            'poster' => fake()->imageUrl()
        ];
    }
}
