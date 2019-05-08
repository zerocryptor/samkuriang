<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;



class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i=0; $i<5 ; $i++) {
            DB::table ('AdminsTableSeeder')->insert([
                'username' => $faker->userName,
                'password' => Hash::make('admin'),
                'db_user' => 1
            ]);
        }
    }
}