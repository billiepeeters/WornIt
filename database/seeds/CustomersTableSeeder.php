<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'firstname' => 'customer',
                'lastname' => 'first',
                'birthdate' => '22/12/2016',
                'email' => 'customer@gmail.com',
                'phone_number' => '0494298667',
                'password' => 'billie' 
            ]
        ]);
    }
}
