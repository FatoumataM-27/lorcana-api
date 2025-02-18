<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\Set;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Créer un utilisateur de test
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Créer quelques sets
        $sets = Set::factory(3)->create();

        // Créer des cartes pour chaque set
        foreach ($sets as $set) {
            $cards = Card::factory(20)->create([
                'set_id' => $set->id,
            ]);

            // Ajouter quelques cartes à la collection de l'utilisateur
            $cards->take(5)->each(function ($card) use ($user) {
                $user->cards()->attach($card->id, [
                    'normal_quantity' => rand(1, 4),
                    'foil_quantity' => rand(0, 2),
                ]);
            });

            // Ajouter quelques cartes à la wishlist de l'utilisateur
            $cards->skip(5)->take(3)->each(function ($card) use ($user) {
                $user->wishlist()->attach($card->id);
            });
        }
    }
}
