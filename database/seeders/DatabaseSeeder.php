<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pokemon;
use App\Models\Type;
use App\Models\Attaque;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Création des types
        $typeEau = Type::create([
            'image' => 'eau.png',
            'nom' => 'Eau',
            'couleur' => 'Bleu'
        ]);

        $typeFeu = Type::create([
            'image' => 'feu.png',
            'nom' => 'Feu',
            'couleur' => 'Rouge'
        ]);

        // Création des Pokémon
        $pokemon1 = Pokemon::create([
            'pointsDeVie' => 100,
            'poids' => 15.5,
            'taille' => 1.2
        ]);

        $pokemon2 = Pokemon::create([
            'pointsDeVie' => 80,
            'poids' => 10.0,
            'taille' => 0.8
        ]);

        $pokemon3 = Pokemon::create([
            'pointsDeVie' => 80,
            'poids' => 10.0,
            'taille' => 0.8
        ]);

        $pokemon4 = Pokemon::create([
            'pointsDeVie' => 80,
            'poids' => 10.0,
            'taille' => 0.8
        ]);

        $pokemon5 = Pokemon::create([
            'pointsDeVie' => 80,
            'poids' => 10.0,
            'taille' => 0.8
        ]);

        $pokemon6 = Pokemon::create([
            'pointsDeVie' => 80,
            'poids' => 10.0,
            'taille' => 0.8
        ]);

        // Association des types aux Pokémon
        $pokemon1->types()->attach([$typeEau->id, $typeFeu->id]);
        $pokemon2->types()->attach($typeEau->id);
        $pokemon3->types()->attach([$typeEau->id, $typeFeu->id]);
        $pokemon4->types()->attach($typeEau->id);
        $pokemon5->types()->attach([$typeEau->id, $typeFeu->id]);
        $pokemon6->types()->attach($typeEau->id);

        // Création des attaques
        Attaque::create([
            'nom' => 'Jet d\'eau',
            'image' => 'jet_eau.png',
            'degats' => 40,
            'description' => 'Une attaque d\'eau puissante.',
            'pokemon_id' => $pokemon1->id,
            'type_id' => $typeEau->id
        ]);

        Attaque::create([
            'nom' => 'Flammèche',
            'image' => 'flammeche.png',
            'degats' => 50,
            'description' => 'Une attaque de feu brûlante.',
            'pokemon_id' => $pokemon2->id,
            'type_id' => $typeFeu->id
        ]);
    }
}


