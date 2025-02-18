<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SetFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->words(3, true),
            'code' => $this->faker->unique()->lexify('???'),
            'release_date' => $this->faker->date(),
            'total_cards' => $this->faker->numberBetween(100, 300),
        ];
    }
}
