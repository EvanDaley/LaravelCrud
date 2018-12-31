<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numProducts = 4;
        for ($i = 0; $i < $numProducts; $i++) {
            $product = factory(App\Models\Product::class)->make()->save();
        }
    }
}
