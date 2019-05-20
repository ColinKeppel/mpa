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
                'details' => 'survival game',
            ], [
                'name' => 'Pokemon Go',
                'price' => '4.99',
                'stock' => '13',
                'details' => 'Real life open world catch game',
            ], [
                'name' => 'Dota 2',
                'price' => '10',
                'stock' => '5',
                'details' => 'Best game ever',
            ], [
                'name' => 'Monopoly',
                'price' => '12.99',
                'stock' => '25',
                'details' => 'Money, Mystery',
            ],[
                'name' => 'Risk',
                'price' => '10',
                'stock' => '5',
                'details' => 'Tactics',
            ],[
                'name' => 'Clash of clans',
                'price' => '2.99',
                'stock' => '2',
                'details' => 'Tactics, City-builder',
            ]
        ];

        DB::table('products')->insert($products);
    }
}
