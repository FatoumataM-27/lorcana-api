<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Seeder;

class SetSeeder extends Seeder
{
    public function run(): void
    {
        // Exemple de données
        Set::create([
            'name' => 'Rise of the Floodborn',
            'code' => 'ROF',
            'release_date' => '2023-12-01',
            'total_cards' => 204,
        ]);
    }
}
