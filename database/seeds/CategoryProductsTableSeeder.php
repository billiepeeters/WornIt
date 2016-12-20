<?php

use Illuminate\Database\Seeder;

class CategoryProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoryproducts')->insert([
            ['category' => 1,
                'product' => 1]
        ]);

        DB::table('categoryproducts')->insert([
            ['category' => 1,
                'product' => 2]
        ]);

        DB::table('categoryproducts')->insert([
            ['category' => 1,
                'product' => 3]
        ]);

        DB::table('categoryproducts')->insert([
            ['category' => 1,
                'product' => 4]
        ]);

        DB::table('categoryproducts')->insert([
            ['category' => 2,
                'product' => 1]
        ]);

        DB::table('categoryproducts')->insert([
            ['category' => 2,
                'product' => 2]
        ]);

        DB::table('categoryproducts')->insert([
            ['category' => 2,
                'product' => 3]
        ]);

        DB::table('categoryproducts')->insert([
            ['category' => 2,
                'product' => 4]
        ]);
    }
}
