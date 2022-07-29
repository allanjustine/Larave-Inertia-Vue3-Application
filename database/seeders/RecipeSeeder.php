<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipes = [
            [
                'name' => 'Sinugbang Bangus',
                'type' => 'Sea Food',
                'instruction' => 'Himbisan ang bangus. Tangtangon ang hasang ug ang tinae. Hugasan ug tarung aron mawala ang langsi. Ipotos ang bangos sa foil ug ibutang sa baga'
            ],

            [
                'name' => 'Lugaw',
                'type' => 'Painit',
                'instruction' => 'Hugasan ang bugas. Ibutang sa Kaldero butangan ug daghang tubig ug pabukalon hantod ma humok'
            ]
        ];
        foreach($recipes as $r) {
            Recipe::create($r);
        }
    }
}
