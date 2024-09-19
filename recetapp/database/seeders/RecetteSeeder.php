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
            'ingredients' => '200g tomates, 50g basilic frais, 30ml huile d\'olive, 1 pincée de sel, 1 pincée de poivre',

        ]);

        Recette::create([
            'title' => 'Soupe de Carottes Rôties',
            'description' => 'Une soupe réconfortante à base de carottes rôties au gingembre.',
            'duration' => '1h',
            'difficulty' => 'Moyenne',
            'budget' => 'Bas',
            'image' => 'carrot_soup_image.jpg',
            'ingredients' => '500g carottes, 1 oignon, 2 gousses d\'ail, 1 litre de bouillon de légumes, 30g gingembre, 30ml huile d\'olive, sel, poivre',

        ]);

        Recette::create([
            'title' => 'Courgettes Farcies',
            'description' => 'Des courgettes farcies avec de la viande hachée et du fromage.',
            'duration' => '45min',
            'difficulty' => 'Moyenne',
            'budget' => 'Moyen',
            'image' => 'stuffed_zucchini_image.jpg',
            'ingredients' => '4 courgettes, 300g viande hachée, 1 oignon, 2 gousses d\'ail, 100g fromage râpé, 200g tomates concassées, 30ml huile d\'olive, sel, poivre',

        ]);

        Recette::create([
            'title' => 'Aubergine à la Parmesane',
            'description' => 'Des tranches d’aubergines au four avec de la sauce tomate et du fromage.',
            'duration' => '1h30min',
            'difficulty' => 'Difficile',
            'budget' => 'Moyen',
            'image' => 'eggplant parmesan.jpg',
            'ingredients' => '2 aubergines, 400g sauce tomate, 200g mozzarella, 50g parmesan râpé, 1 gousse d\'ail, 30ml huile d\'olive, sel, poivre',

        ]);

        Recette::create([
            'title' => 'Lasagnes aux Épinards et Ricotta',
            'description' => 'Lasagnes végétariennes aux épinards, ricotta et sauce tomate.',
            'duration' => '2h',
            'difficulty' => 'Difficile',
            'budget' => 'Élevé',
            'image' => 'spinach_lasagna.jpg',
            'ingredients' => '250g pâtes à lasagne, 500g épinards, 250g ricotta, 400g sauce tomate, 200g mozzarella, 50g parmesan râpé, sel, poivre',

        ]);

        Recette::create([
            'title' => 'Purée de Pommes de Terre à l’Ail',
            'description' => 'Purée crémeuse à base de pommes de terre et d’ail rôti.',
            'duration' => '30min',
            'difficulty' => 'Facile',
            'budget' => 'Bas',
            'image' => 'garlic mashed potatoes.jpg',
            'ingredients' => '1kg pommes de terre, 3 gousses d\'ail, 100ml lait, 50g beurre, sel, poivre',

        ]);

        Recette::create([
            'title' => 'Salade de Concombre au Yaourt',
            'description' => 'Salade fraîche de concombre avec du yaourt et du citron.',
            'duration' => '15min',
            'difficulty' => 'Facile',
            'budget' => 'Bas',
            'image' => 'cucumber_salad.jpg',
            'ingredients' => '200g concombre, 300g yaourt, 1 citron',
        ]);

        Recette::create([
            'title' => 'Poivrons Rôtis Farcis au Feta',
            'description' => 'Poivrons doux rôtis farcis au fromage feta et herbes.',
            'duration' => '40min',
            'difficulty' => 'Moyenne',
            'budget' => 'Moyen',
            'image' => 'roasted_peppers.jpg',
            'ingredients' => '4 carottes, 300g viande hachée, 1 oignon, 2 gousses d\'ail, 100g fromage râpé, 200g tomates concassées, 30ml huile d\'olive, sel, poivre',
        ]);

        Recette::create([
            'title' => 'Quiche Brocoli et Cheddar',
            'description' => 'Quiche savoureuse au brocoli et fromage cheddar.',
            'duration' => '1h20min',
            'difficulty' => 'Moyenne',
            'budget' => 'Moyen',
            'image' => 'broccoli_quiche.jpg',
            'ingredients' => '200g brocoli, 50g cheddar, 30ml huile d\'olive, 1 pincée de sel, 1 pincée de poivre',
        ]);

        Recette::create([
            'title' => 'Gratin de Chou-fleur',
            'description' => 'Gratin de chou-fleur avec une sauce crémeuse au fromage.',
            'duration' => '50min',
            'difficulty' => 'Moyenne',
            'budget' => 'Bas',
            'image' => 'cauliflower_gratin.jpg',
            'ingredients' => '200g tomates, 50g basilic frais, 30ml huile d\'olive, 1 pincée de sel, 1 pincée de poivre',
        ]);
    }
}
