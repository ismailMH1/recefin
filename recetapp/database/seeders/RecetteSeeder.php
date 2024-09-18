<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recette;


class RecetteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        Recette::create([
            'title' => 'Salade de Tomates et Basilic',
            'description' => 'Une salade fraîche et légère avec des tomates mûres et du basilic.',
            'duration' => '10min',
            'difficulty' => 'Facile',
            'budget' => 'Bas',
            'image' => 'tomato_salad_image.jpg',
        ]);

        Recette::create([
            'title' => 'Soupe de Carottes Rôties',
            'description' => 'Une soupe réconfortante à base de carottes rôties au gingembre.',
            'duration' => '1h',
            'difficulty' => 'Moyenne',
            'budget' => 'Bas',
            'image' => 'carrot_soup_image.jpg',
        ]);

        Recette::create([
            'title' => 'Courgettes Farcies',
            'description' => 'Des courgettes farcies avec de la viande hachée et du fromage.',
            'duration' => '45min',
            'difficulty' => 'Moyenne',
            'budget' => 'Moyen',
            'image' => 'stuffed_zucchini_image.jpg',
        ]);

        Recette::create([
            'title' => 'Aubergine à la Parmesane',
            'description' => 'Des tranches d’aubergines au four avec de la sauce tomate et du fromage.',
            'duration' => '1h30min',
            'difficulty' => 'Difficile',
            'budget' => 'Moyen',
            'image' => 'eggplant parmesan.jpg',
        ]);

        Recette::create([
            'title' => 'Lasagnes aux Épinards et Ricotta',
            'description' => 'Lasagnes végétariennes aux épinards, ricotta et sauce tomate.',
            'duration' => '2h',
            'difficulty' => 'Difficile',
            'budget' => 'Élevé',
            'image' => 'spinach_lasagna.jpg',
        ]);

        Recette::create([
            'title' => 'Purée de Pommes de Terre à l’Ail',
            'description' => 'Purée crémeuse à base de pommes de terre et d’ail rôti.',
            'duration' => '30min',
            'difficulty' => 'Facile',
            'budget' => 'Bas',
            'image' => 'garlic mashed potatoes.jpg',
        ]);

        Recette::create([
            'title' => 'Salade de Concombre au Yaourt',
            'description' => 'Salade fraîche de concombre avec du yaourt et du citron.',
            'duration' => '15min',
            'difficulty' => 'Facile',
            'budget' => 'Bas',
            'image' => 'cucumber_salad.jpg',
        ]);

        Recette::create([
            'title' => 'Poivrons Rôtis Farcis au Feta',
            'description' => 'Poivrons doux rôtis farcis au fromage feta et herbes.',
            'duration' => '40min',
            'difficulty' => 'Moyenne',
            'budget' => 'Moyen',
            'image' => 'roasted_peppers.jpg',
        ]);

        Recette::create([
            'title' => 'Quiche Brocoli et Cheddar',
            'description' => 'Quiche savoureuse au brocoli et fromage cheddar.',
            'duration' => '1h20min',
            'difficulty' => 'Moyenne',
            'budget' => 'Moyen',
            'image' => 'broccoli_quiche.jpg',
        ]);

        Recette::create([
            'title' => 'Gratin de Chou-fleur',
            'description' => 'Gratin de chou-fleur avec une sauce crémeuse au fromage.',
            'duration' => '50min',
            'difficulty' => 'Moyenne',
            'budget' => 'Bas',
            'image' => 'cauliflower_gratin.jpg',
        ]);
    }
}
