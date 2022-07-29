<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = [
            [
                'recipe_id' => 1,
                'name' => 'Ginger Root',
                'measure' => '200',
                'unit' => 'grams'
            ],
            [
                'recipe_id' => 1,
                'name' => 'Japaleno',
                'measure' => '100',
                'unit' => 'grams'
            ],
            [
                'recipe_id' => 1,
                'name' => 'Vinegar',
                'measure' => '300',
                'unit' => 'ml'
            ],

            [
                'recipe_id' => 2,
                'name' => 'Rice',
                'measure' => '1',
                'unit' => 'kilograms'

            ],

            [
                'recipe_id' => 2,
                'name' => 'Water',
                'measure' => '1000',
                'unit' => 'mL'

            ]
        ];
        foreach($ingredients as $i) {
            Ingredient::create($i);
        }
    }
}
