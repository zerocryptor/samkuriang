<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GarbageOfficersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<5; $i++) {
            $faker = Faker::create('id_ID'); 
            DB::table ('garbage_officers')->insert([
                'email'=>$faker->email,
                'name'=>$faker->name,
                'address'=>$faker->address,
                'phonenumber'=>$faker->phonenumber,
                'password'=>hash::make('password')
            ]);
        }
    }
}
