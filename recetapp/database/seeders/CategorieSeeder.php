<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorie;


class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::create([
            'title' => 'Tomates',
            'image' => 'path_to_tomato_image.jpg',
        ]);

        Categorie::create([
            'title' => 'Carottes',
            'image' => 'path_to_carrot_image.jpg',
        ]);

        Categorie::create([
            'title' => 'Courgettes',
            'image' => 'path_to_zucchini_image.jpg',
        ]);

        Categorie::create([
            'title' => 'Aubergines',
            'image' => 'path_to_eggplant_image.jpg',
        ]);

        Categorie::create([
            'title' => 'Épinards',
            'image' => 'path_to_spinach_image.jpg',
        ]);

        Categorie::create([
            'title' => 'Pommes de terre',
            'image' => 'path_to_potato_image.jpg',
        ]);

        Categorie::create([
            'title' => 'Concombres',
            'image' => 'path_to_cucumber_image.jpg',
        ]);

        Categorie::create([
            'title' => 'Poivrons',
            'image' => 'path_to_pepper_image.jpg',
        ]);

        Categorie::create([
            'title' => 'Brocoli',
            'image' => 'path_to_broccoli_image.jpg',
        ]);

        Categorie::create([
            'title' => 'Chou-fleur',
            'image' => 'path_to_cauliflower_image.jpg',
        ]);
    }
}
