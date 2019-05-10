<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Minecraft',
                'price' => '29.99',
                'stock' => '12',
                'details' => 'Open world survival game',
            ], [
                'name' => 'Pokemon Go',
                'price' => '4.99',
                'stock' => '13',
                'details' => 'Open world Catch game',
            ], [
                'name' => 'Dota',
                'price' => '10',
                'stock' => '5',
                'details' => 'Best game ever',
            ]
        ];

        DB::table('products')->insert($products);
    }
}
