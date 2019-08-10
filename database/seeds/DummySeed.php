<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Category;
use App\Product;
use App\Stock;

class DummySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $categories = [
            'Beras',
            'Minyak Goreng',
            'Minuman',
            'Perawatan tubuh',
            'Bahan dan peralatan cuci',
            'Alat tulis dan kantor',
            'Snack'
        ];

        foreach ($categories as $key => $category) {

            $c = Category::create([
                'category_name' => $category
            ]);

        }

        for($i = 0; $i < 100; $i++) {
            $p = Product::create([
                'product_name' => $faker->unique()->text($maxNbChars = 13),
                'category_id' => rand(1, 7),
                'price' => rand(10000, 60000),
            ]);

            Stock::create([
                'product_id' => $p->id,
                'quantity' => rand(30, 200),
            ]);
        }

    }
}
