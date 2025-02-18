<?php

namespace Database\Factories;

use App\Models\Set;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    public function definition(): array
    {
        return [
            'set_id' => Set::factory(),
            'name' => $this->faker->name,
            'number' => $this->faker->unique()->numberBetween(1, 999),
            'ink_color' => $this->faker->randomElement(['Amber', 'Amethyst', 'Emerald', 'Ruby', 'Sapphire', 'Steel']),
            'ink_cost' => $this->faker->numberBetween(1, 9),
            'strength' => $this->faker->numberBetween(1, 8),
            'willpower' => $this->faker->numberBetween(1, 8),
            'type' => $this->faker->randomElement(['Character', 'Action', 'Item']),
            'subtype' => $this->faker->randomElement(['Hero', 'Villain', 'Ally', 'Location']),
            'description' => $this->faker->text(),
            'rarity' => $this->faker->randomElement(['Common', 'Uncommon', 'Rare', 'Super Rare', 'Legendary']),
        ];
    }
}
