<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Administrador;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Fecha aleatoria dentro de los próximos 30 días
        $fechaEvento = $this->faker->dateTimeBetween('now', '+30 days');
        
        return [
            'administrador_id' => Administrador::factory(),
            'nombre' => $this->faker->name(),
            'codigo' => $this->faker->unique()->numerify('#######'),
            'creditos' => $this->faker->numberBetween(1, 10),
            'dia' => $fechaEvento,
        ];
    }
}
