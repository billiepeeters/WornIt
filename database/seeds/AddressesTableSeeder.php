<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            ['customer' => 1,
            'street' => 'Langeridderstraat',
            'house_number' => 44,
            'city' => 'Mechelen',
            'zip_code' => 2800,
            'province' => 'Antwerpen']
        ]);
    }
}
