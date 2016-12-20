<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'trui',
            'sellerId' => 1,
            'price' => 12,
            'size' => 1,
            'brand' => 'weAreImd']
        ]);
        
       DB::table('products')->insert([
            ['name' => 'trui', 
             'sellerId' => 1,
             'price' => 12, 
             'size' => 2, 
             'brand' => 'weAreImd']
        ]);
        
        DB::table('products')->insert([
            ['name' => 'trui', 
             'sellerId' => 1,
             'price' => 12, 
             'size' => 3, 
             'brand' => 'weAreImd']
        ]);
        
        DB::table('products')->insert([
            ['name' => 'trui',
             'sellerId' => 1,
             'price' => 12, 
             'size' => 4, 
             'brand' => 'weAreImd']
        ]);
        
        DB::table('products')->insert([
            ['name' => 't-shirt', 
             'sellerId' => 1,
             'price' => 7, 
             'size' => 1,
             'brand' => 'weAreImd']
        ]);

        DB::table('products')->insert([
            ['name' => 't-shirt',
                'sellerId' => 1,
                'price' => 7,
                'size' => 2,
                'brand' => 'weAreImd']
        ]);

        DB::table('products')->insert([
            ['name' => 't-shirt',
                'sellerId' => 1,
                'price' => 7,
                'size' => 3,
                'brand' => 'weAreImd']
        ]);

        DB::table('products')->insert([
            ['name' => 't-shirt',
                'sellerId' => 1,
                'price' => 7,
                'size' => 4,
                'brand' => 'weAreImd']
        ]);

    }
}
