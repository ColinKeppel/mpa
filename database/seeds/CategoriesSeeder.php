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
                'name' => 'RPG',
                'details' => 'Role-playing Game',
            ], [
                'name' => 'Open world',
                'details' => 'Free-roaming worlds',
            ], [
                'name' => 'Survival',
                'details' => 'Survival game',
            ], 
        ];
        
        DB::table('categories')->insert($categories);
    }
}
