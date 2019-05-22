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
                'details' => 'survival game',
            ], [
                'name' => 'Pokemon Go',
                'price' => '4.99',
                'details' => 'Real life open world catch game',
            ], [
                'name' => 'Dota 2',
                'price' => '10',
                'details' => 'Best game ever',
            ], [
                'name' => 'Monopoly',
                'price' => '12.99',
                'details' => 'Money, Mystery',
            ],[
                'name' => 'Risk',
                'price' => '10',
                'details' => 'Tactics',
            ],[
                'name' => 'Clash of clans',
                'price' => '2.99',
                'details' => 'Tactics, City-builder',
            ]
        ];

        DB::table('products')->insert($products);
    }
}
