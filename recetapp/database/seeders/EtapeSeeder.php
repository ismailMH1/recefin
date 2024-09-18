<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Etape;

class EtapeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Etape::create([
            'recette_id' => 1,
            'name' => 'Préparation des ingrédients',
            'description' => 'Coupez les tomates et la mozzarella en tranches.',
            'order' => 1,
        ]);

        Etape::create([
            'recette_id' => 1,
            'name' => 'Assemblage de la salade',
            'description' => 'Disposez-les sur une assiette et ajoutez des feuilles de basilic.',
            'order' => 2,
        ]);

        Etape::create([
            'recette_id' => 1,
            'name' => 'Assaisonnement',
            'description' => 'Versez un filet d’huile d’olive et assaisonnez avec du sel et du poivre.',
            'order' => 3,
        ]);

        // Soupe de Carottes Rôties (Recette ID 2 - 4 steps)
        Etape::create([
            'recette_id' => 2,
            'name' => 'Préchauffage du four',
            'description' => 'Préchauffez le four à 200°C.',
            'order' => 1,
        ]);

        Etape::create([
            'recette_id' => 2,
            'name' => 'Préparation des carottes',
            'description' => 'Épluchez et coupez les carottes, disposez-les sur une plaque et faites-les rôtir pendant 40 minutes.',
            'order' => 2,
        ]);

        Etape::create([
            'recette_id' => 2,
            'name' => 'Mixage de la soupe',
            'description' => 'Mixez les carottes rôties avec du bouillon, du gingembre et du sel.',
            'order' => 3,
        ]);

        Etape::create([
            'recette_id' => 2,
            'name' => 'Service',
            'description' => 'Réchauffez la soupe et servez chaude.',
            'order' => 4,
        ]);

        // Courgettes Farcies (Recette ID 3 - 5 steps)
        Etape::create([
            'recette_id' => 3,
            'name' => 'Préparation des courgettes',
            'description' => 'Coupez les courgettes en deux dans le sens de la longueur et retirez la chair.',
            'order' => 1,
        ]);

        Etape::create([
            'recette_id' => 3,
            'name' => 'Préparation de la farce',
            'description' => 'Faites revenir la viande hachée avec des oignons et des tomates.',
            'order' => 2,
        ]);

        Etape::create([
            'recette_id' => 3,
            'name' => 'Remplissage des courgettes',
            'description' => 'Remplissez les courgettes de ce mélange, ajoutez du fromage râpé.',
            'order' => 3,
        ]);

        Etape::create([
            'recette_id' => 3,
            'name' => 'Cuisson',
            'description' => 'Enfournez pendant 25 minutes à 180°C.',
            'order' => 4,
        ]);

        Etape::create([
            'recette_id' => 3,
            'name' => 'Service',
            'description' => 'Sortez du four et servez chaud.',
            'order' => 5,
        ]);

        // Aubergine à la Parmesane (Recette ID 4 - 4 steps)
        Etape::create([
            'recette_id' => 4,
            'name' => 'Préparation des aubergines',
            'description' => 'Coupez les aubergines en tranches et faites-les dégorger avec du sel pendant 30 minutes.',
            'order' => 1,
        ]);

        Etape::create([
            'recette_id' => 4,
            'name' => 'Cuisson des aubergines',
            'description' => 'Faites dorer les tranches d’aubergines dans de l’huile d’olive.',
            'order' => 2,
        ]);

        Etape::create([
            'recette_id' => 4,
            'name' => 'Montage du plat',
            'description' => 'Disposez les aubergines dans un plat, ajoutez la sauce tomate et parsemez de parmesan.',
            'order' => 3,
        ]);

        Etape::create([
            'recette_id' => 4,
            'name' => 'Cuisson au four',
            'description' => 'Enfournez à 180°C pendant 40 minutes.',
            'order' => 4,
        ]);

        // Lasagnes aux Épinards et Ricotta (Recette ID 5 - 6 steps)
        Etape::create([
            'recette_id' => 5,
            'name' => 'Préparation des épinards',
            'description' => 'Faites cuire les épinards à la vapeur et égouttez-les.',
            'order' => 1,
        ]);

        Etape::create([
            'recette_id' => 5,
            'name' => 'Préparation de la sauce',
            'description' => 'Faites une sauce tomate maison avec des oignons et des tomates.',
            'order' => 2,
        ]);

        Etape::create([
            'recette_id' => 5,
            'name' => 'Montage des lasagnes',
            'description' => 'Dans un plat, alternez les couches de pâte à lasagnes, de ricotta, d’épinards et de sauce tomate.',
            'order' => 3,
        ]);

        Etape::create([
            'recette_id' => 5,
            'name' => 'Ajout de fromage',
            'description' => 'Ajoutez du fromage râpé entre chaque couche.',
            'order' => 4,
        ]);

        Etape::create([
            'recette_id' => 5,
            'name' => 'Cuisson',
            'description' => 'Enfournez à 180°C pendant 45 minutes.',
            'order' => 5,
        ]);

        Etape::create([
            'recette_id' => 5,
            'name' => 'Service',
            'description' => 'Servez chaud avec une salade verte.',
            'order' => 6,
        ]);

   // Ratatouille (Recette ID 6 - 5 steps)
   Etape::create([
    'recette_id' => 6,
    'name' => 'Préparation des légumes',
    'description' => 'Coupez les aubergines, courgettes, poivrons et tomates en petits dés.',
    'order' => 1,
]);

Etape::create([
    'recette_id' => 6,
    'name' => 'Cuisson des légumes',
    'description' => 'Faites revenir chaque légume séparément dans de l’huile d’olive.',
    'order' => 2,
]);

Etape::create([
    'recette_id' => 6,
    'name' => 'Mélange des légumes',
    'description' => 'Mélangez tous les légumes ensemble et ajoutez des herbes de Provence.',
    'order' => 3,
]);

Etape::create([
    'recette_id' => 6,
    'name' => 'Cuisson finale',
    'description' => 'Laissez mijoter pendant 30 minutes.',
    'order' => 4,
]);

Etape::create([
    'recette_id' => 6,
    'name' => 'Service',
    'description' => 'Servez chaud ou froid avec du pain frais.',
    'order' => 5,
]);

// Gratin Dauphinois (Recette ID 7 - 4 steps)
Etape::create([
    'recette_id' => 7,
    'name' => 'Préparation des pommes de terre',
    'description' => 'Épluchez les pommes de terre et coupez-les en fines tranches.',
    'order' => 1,
]);

Etape::create([
    'recette_id' => 7,
    'name' => 'Préparation du gratin',
    'description' => 'Disposez les pommes de terre dans un plat, versez la crème et ajoutez de l’ail.',
    'order' => 2,
]);

Etape::create([
    'recette_id' => 7,
    'name' => 'Ajout de fromage',
    'description' => 'Parsemez le gratin de fromage râpé.',
    'order' => 3,
]);

Etape::create([
    'recette_id' => 7,
    'name' => 'Cuisson',
    'description' => 'Faites cuire au four pendant 1 heure à 180°C.',
    'order' => 4,
]);

// Tarte aux Tomates et Moutarde (Recette ID 8 - 3 steps)
Etape::create([
    'recette_id' => 8,
    'name' => 'Préparation de la pâte',
    'description' => 'Étalez la pâte brisée dans un moule et piquez-la avec une fourchette.',
    'order' => 1,
]);

Etape::create([
    'recette_id' => 8,
    'name' => 'Garniture',
    'description' => 'Étalez une couche de moutarde sur la pâte et disposez les tomates coupées en rondelles.',
    'order' => 2,
]);

Etape::create([
    'recette_id' => 8,
    'name' => 'Cuisson',
    'description' => 'Faites cuire au four pendant 25 minutes à 200°C.',
    'order' => 3,
]);

// Tian de Légumes (Recette ID 9 - 5 steps)
Etape::create([
    'recette_id' => 9,
    'name' => 'Préparation des légumes',
    'description' => 'Coupez les courgettes, aubergines et tomates en rondelles.',
    'order' => 1,
]);

Etape::create([
    'recette_id' => 9,
    'name' => 'Disposition des légumes',
    'description' => 'Disposez les légumes en alternant dans un plat à gratin.',
    'order' => 2,
]);

Etape::create([
    'recette_id' => 9,
    'name' => 'Assaisonnement',
    'description' => 'Versez un filet d’huile d’olive et saupoudrez d’herbes de Provence.',
    'order' => 3,
]);

Etape::create([
    'recette_id' => 9,
    'name' => 'Cuisson',
    'description' => 'Enfournez pendant 45 minutes à 180°C.',
    'order' => 4,
]);

Etape::create([
    'recette_id' => 9,
    'name' => 'Service',
    'description' => 'Servez chaud en accompagnement d’une viande ou poisson.',
    'order' => 5,
]);

// Poêlée de Champignons (Recette ID 10 - 3 steps)
Etape::create([
    'recette_id' => 10,
    'name' => 'Préparation des champignons',
    'description' => 'Nettoyez les champignons et coupez-les en morceaux.',
    'order' => 1,
]);

Etape::create([
    'recette_id' => 10,
    'name' => 'Cuisson',
    'description' => 'Faites revenir les champignons dans du beurre avec de l’ail.',
    'order' => 2,
]);



Etape::create([
    'recette_id' => 10,
    'name' => 'Service',
    'description' => 'Ajoutez du persil ciselé et servez chaud.',
    'order' => 3,
]);


    }
}
