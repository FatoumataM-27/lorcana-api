<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    public function run(): void
    {
        // Exemple de données
        Card::create([
            'set_id' => 1,
            'name' => 'Mickey Mouse',
            'number' => '001',
            'ink_color' => 'Amber',
            'ink_cost' => 2,
            'strength' => 2,
            'willpower' => 3,
            'type' => 'Character',
            'subtype' => 'Hero',
            'description' => 'When Mickey Mouse enters play, draw a card.',
            'rarity' => 'Common',
        ]);
    }
}
