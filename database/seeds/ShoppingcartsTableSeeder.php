<?php

use Illuminate\Database\Seeder;

class ShoppingcartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schoppingcarts')->insert([
            ['customer' => '1',
                'product' => '1']
        ]);
    }
}
