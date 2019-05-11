<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class UsersTableSeeder extends Seeder
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
            DB::table ('users')->insert([
                'name' => $faker->name,
                'email' => $faker->freeEmail,
                'password' => Hash::make('password'),
                'address' => $faker->address,
                'phone_number' => $faker->phoneNumber,
                'saving_id' => 1,
                'garbage_bank_id' => 1
            ]);
        }
    }  
}
