<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'stazione_partenza' => fake()->word(),
            'stazione_arrivo' => fake()->word(),
            'orario_partenza' => fake()->time('H_i'),
            'orario_arrivo' => fake()->time('H_i'),
            'codice_treno' => fake()->ean8(),
            'numero_carrozza' => fake()->randomDigitNotNull(),
            'azienda' => fake()->word(),
        ];
    }
}
