<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cliente_id' => \App\Models\Cliente::factory(),
            'tecnico_id' => \App\Models\Tecnico::factory(),
            'descripcion' => $this->faker->sentence,
            'estado' => $this->faker->randomElement(['abierto', 'cerrado']),
            'prioridad' => $this->faker->randomElement(['baja', 'media', 'alta']),
            'fecha_creacion' => $this->faker->dateTime,
            'fecha_cierre' => $this->faker->dateTime,
        ];
    }
}
