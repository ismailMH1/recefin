<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoryRecetteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_recette')->insert([
            ['category_id' => 1, 'recette_id' => 1],
            ['category_id' => 2, 'recette_id' => 1],
            ['category_id' => 3, 'recette_id' => 2],
        ]);
    }
}
