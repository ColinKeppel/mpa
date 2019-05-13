<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Computer Games',
                'details' => 'Computer-games',
            ], [
                'name' => 'Board-game',
                'details' => 'Board-games',
            ], [
                'name' => 'Apps',
                'details' => 'App-games',
            ]
        ];
        
        DB::table('categories')->insert($categories);
    }
}
