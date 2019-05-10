<?php

use Illuminate\Database\Seeder;

class Category_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $relations = [
            [
                'category_id' => 1,
                'product_id' => 1,
            ], [
                'category_id' => 1,
                'product_id' => 2,
            ], [
                'category_id' => 1,
                'product_id' => 3,
            ], 
        ];
        //category 1
        DB::table('category_product')->insert($relations);
    }
}
